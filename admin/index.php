<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css">
    <title>Admin Panel</title>
</head>

<body>

    <div id="loading" style="height:100vh; background: rgba(255, 255, 255, 1);z-index:190000;position:fixed;width:100vw;">
        <!-- Show Loading if Data not ready yet -->
        <div class="row d-flex align-items-center" style="height:100vh;width:100vw;">
            <div class="col-12 text-center">
                <img class="pt-4" src="../image/logoT.png" width="100 " alt=" ">
                <p class="fw-bold">THIDA AUTO CENTER </p>
                <p>Prestige Car Sourcing Specialist and Export Worldwide</p>
            </div>
        </div>
    </div>

    <div class="container" id="admin">

        <!-- Auth User -->
        <div v-if="auth" class="row justify-content-center">
            <div class="col-6 text-center fw-bold p-3">
                All Message <span class="badge bg-success">{{this.message.length}}</span>
            </div>
            <div class="col-6 p-3 text-end">
                <i @click="logout()" class="fas fa-sign-out-alt text-danger" style="font-size: 25px;"></i>
            </div>

            <div class="pt-3"></div>

            <div class="col-12 col-md-6 mt-2" v-for="(msg,index) in message">
                <div @click="readMsg(msg.id)" data-bs-toggle="modal" :data-bs-target="'#screenShot'+index" class="row justify-content-center">
                    <div class="col-11 card shadow">
                        <div class="card-body">
                            <h5 class="card-title">{{msg.name}} <span v-show="msg.read == '0'" class="badge bg-danger position-relative" style="font-size:11px;top:-4px;right:0;">New</span>
                            </h5>
                            <p class="card-text">{{msg.message.substr(0, 100)}}</p>
                            <p class="card-text text-end"><small class="text-muted">{{msg.date}}</small></p>
                        </div>
                    </div>
                </div>

                <!-- Full Details -->
                <div :id="'screenShot'+index" class="modal fade" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">{{msg.name}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <p>Phone : {{msg.phone}} </p>
                                <p>Email : {{msg.email}} </p>
                                {{msg.message}}
                            </div>
                            <div class="modal-footer pb-2">
                                <button @click="deleteMsg(msg.id)" type="button" data-bs-dismiss="modal" class="btn btn-danger w-25 mr-3">Delete</button>
                                <button type="button" data-bs-dismiss="modal" class="btn btn-dark w-25 mr-3">OK</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Login -->
        <div v-else class="row align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-md-4 text-center">
                <div class="row justify-content-center">
                    <div class="col-11 card shadow pt-4 pb-3">
                        <h4 class="fw-bold pb-3">Account LogIn</h4>

                        <p class="text-danger">{{rgalert}}</p>
                        <li class=" list-unstyled mt-2">
                            <div class="col-12 mt-2 form-floating ">
                                <input spellcheck="false" autocomplete="off" v-model="loginemail" class=" pl-3 form-control" placeholder="Email" type="text" required>
                                <label><i class="fa fa-envelope text-muted" aria-hidden="true"> Email</i> </label>
                            </div>
                        </li>

                        <li class=" list-unstyled mt-2">
                            <div class="col-12 mt-2 form-floating position-relative">
                                <input @keyup.enter="readyLogIn()" spellcheck="false" v-model="loginpassword" class=" pl-3 form-control" placeholder="Password" :type="logintype" required>
                                <i v-if="loginpassword != ''" @click="loginHideseek()" :class="logineyelogo" style="margin-left: -30px;cursor:pointer;top:18px;right:15px;" class="fas d-block text-end position-absolute pt-2 pb-2"></i>
                                <label>
                                    <i class="fa fa-lock text-muted" aria-hidden="true"> Password</i>
                                </label>
                            </div>
                        </li>

                        <li class="col-12 list-unstyled mt-4 pt-3 pb-3">
                            <div class="text-center">
                                <button @click="readyLogIn()" class="btn btn-dark border-0 pt-2 pb-2 w-100 text-light fw-bold">LogIn</button>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js " crossorigin="anonymous "></script>
    <script>
        window.addEventListener('DOMContentLoaded', loading('block'), false);

        $(document).ready(function() {

            setTimeout(() => loading('none'), 200);

            new Vue({
                el: "#admin",
                data() {
                    return {
                        loginemail: '',
                        loginpassword: '',
                        logintype: 'password',
                        logineyelogo: 'fa-eye-slash',
                        logindefault: true,
                        loginregisterloading: false,
                        rgalert: '',
                        auth: '',
                        message: [],
                        read: ''
                    }
                },
                methods: {
                    getCookie(e) {
                        var name = e + "=";
                        var decodedCookie = decodeURIComponent(document.cookie);
                        var ca = decodedCookie.split(';');
                        for (var i = 0; i < ca.length; i++) {
                            var c = ca[i];
                            while (c.charAt(0) == ' ') {
                                c = c.substring(1);
                            }
                            if (c.indexOf(name) == 0) {
                                return c.substring(name.length, c.length);
                            }
                        }
                        return "";
                    },
                    loginHideseek() {
                        this.logindefault = !this.logindefault;
                        if (this.logindefault) {
                            this.logintype = 'password';
                            this.logineyelogo = 'fa-eye-slash';
                        } else {
                            this.logintype = 'text';
                            this.logineyelogo = 'fa-eye';
                        }
                    },
                    readyLogIn() {
                        $.ajax({
                            type: 'post',
                            url: 'login.php',
                            cache: false,
                            data: {
                                upass: this.loginpassword,
                                umail: this.loginemail,
                            },
                            credentials: 'include',
                            beforeSend: () => this.loginregisterloading = true,
                            success: res => {
                                console.log(res);
                                if (res == 'IncorrectPassword') {
                                    this.rgalert = 'Incorrect Password,Please check your password again.';
                                    this.loginregisterloading = false;
                                } else if (res == 'NoAccountExist') {
                                    this.rgalert = "Your email doesn't exist.Please check your email again.";
                                    this.loginregisterloading = false;
                                } else if (res == 'Empty') {
                                    this.rgalert = "Fill your account information.";
                                    this.loginregisterloading = false;
                                } else {
                                    if (window.PasswordCredential) {
                                        let pwdCredential = new PasswordCredential({
                                            id: this.loginemail, // Username/ID
                                            name: "Admin", // Display name
                                            password: this.loginpassword // Password
                                        });
                                        //store the credentials
                                        console.assert(pwdCredential.type === "password");
                                        navigator.credentials.store(pwdCredential);
                                    } else {
                                        console.log('Login Credential Fail')
                                    }
                                    location.href = "index.php";
                                }
                            },
                            error: e => {
                                console.log('Error', e);
                            }
                        });
                    },
                    getMessage() {
                        $.ajax({
                            url: 'getAllMsg.php',
                            method: 'get',
                            dataType: 'json',
                            success: e => {
                                this.message = e.msg;
                                this.read = e.unread;
                                console.log(this.message);
                            },
                            error: e => console.log(e)
                        })
                    },
                    readMsg(e) {
                        $.ajax({
                            url: 'read.php',
                            method: 'post',
                            data: {
                                id: e
                            },
                            success: (res) => {
                                this.getMessage();
                            }
                        })
                    },
                    deleteMsg(e) {
                        $.ajax({
                            url: 'del.php',
                            method: 'post',
                            data: {
                                id: e
                            },
                            success: (res) => {
                                this.getMessage();
                            }
                        })
                    },
                    logout() {
                        location.href = "logout.php";
                    }
                },
                mounted() {
                    this.auth = this.getCookie('name').split('+').toString().replace(/,/g, ' ');
                    if (this.auth != '') {
                        this.getMessage();
                    }
                }
            });
        });

         // Get Loading By Id
         function loading(e) {
            document.getElementById('loading').style.display = e;
        }
    </script>
</body>

</html>