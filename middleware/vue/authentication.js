const { createApp } = Vue;

createApp({
    data() {
        return {
            attendance: [],
            count: 1,
            firstname: '',
            lastname: '',
            username: '',
            email: '',
            password: '',
        }
    },
    methods: {
        login: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "login");
            data.append("username", vue.username);
            data.append("password", vue.password);
            axios.post('backend/routes/authentication.php', data)
                .then(function (r) {
                    if (r.data == 1) {
                        window.location.href = "frontend/user/applicant/index.php";
                    } else if (r.data == 2) {
                        window.location.href = "frontend/user/homeowner/index.php";
                    } else if (r.data == 3) {
                        window.location.href = "frontend/admin/index.php";
                    } else {
                        alert('No Data Existed!');
                    }
                });
        },
        registerApplicant: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "register");
            data.append("firstname", vue.firstname);
            data.append("lastname", vue.lastname);
            data.append("username", vue.username);
            data.append("email", vue.email);
            data.append("password", vue.password);
            axios.post('backend/routes/authentication.php', data)
                .then(function (r) {
                    alert(r.data);
                    window.location.reload();
                });
        },
        registerHomeowner: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "registerHomeOwner");
            data.append("homeownerpicture", document.getElementById('homeownerpicture').files[0]);
            data.append("homeownervalidId", document.getElementById('homeownervalidId').files[0]);
            data.append("firstname", vue.firstname);
            data.append("lastname", vue.lastname);
            data.append("username", vue.username);
            data.append("email", vue.email);
            data.append("password", vue.password);
            axios.post('backend/routes/authentication.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert('Successfully Registered!');
                        window.location.reload();
                    } else if (r.data == 400) {
                        alert("Something is wrong in registration!");
                    } else {
                        alert(r.data);
                    }
                });
        },
    },
    created: function () {
        
    }
}).mount('#homeaid')