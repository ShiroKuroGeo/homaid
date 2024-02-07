const { createApp } = Vue;

createApp({
    data() {
        return {
            job: [],
            categories: [],
            selectedTypes: [],
            hiredApplicants: [],
            selectedCategory: [],
            applicantUsers: [],
            getHireRequiments: [],
            getMyPostApplication: [],
            fullname: '',
            email: '',
            requirements: [],
            age: 0,
            categ: '',
            reasonOfReport: '',
            picture: '',
            status: 0,
            userIdes: 0,
            skills: '',
            firstname: '',
            vfullname: '',
            vlastname: '',
            lastname: '',
        }
    },
    methods: {
        storeApplication: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "storeApplication");
            data.append("fullname", vue.fullname);
            data.append("age", vue.age);
            data.append("skills", vue.skills);
            axios.post('../../../backend/routes/applicant.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert('Application sends!');
                    } else {
                        alert('Cannot send the application');
                    }
                });
        },
        updateProfile: function (id) {
            if (!document.getElementById('picture').files[0]) {
                alert('Insert Profile Picture!');
            } else {
                const vue = this;
                var data = new FormData();
                data.append("method", "updateProfile");
                data.append("picture", document.getElementById('picture').files[0]);
                data.append("firstname", vue.vfullname);
                data.append("lastname", vue.vlastname);
                data.append("id", id);
                axios.post('../../../backend/routes/applicant.php', data)
                    .then(function (r) {
                        if (r.data == 200) {
                            alert('User Information Updated!');
                            window.location.reload();
                        } else {
                            alert(r.data);
                        }
                    });
            }
        },
        reportUsers: function (id) {
            const vue = this;
            var data = new FormData();
            data.append("method", "reportUsers");
            data.append("reason", vue.reasonOfReport);
            data.append("id", id);
            axios.post('../../../backend/routes/applicant.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert('User reported!');
                    } else {
                        alert('Cannot send the application');
                    }
                });
        },
        getApplicantUsers: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "applicantUsers");
            axios.post('../../../backend/routes/applicant.php', data)
                .then(function (r) {
                    vue.applicantUsers = [];

                    for (var v of r.data) {
                        vue.applicantUsers.push({
                            appl_id: v.appl_id,
                            hfirstname: v.hfirstname,
                            hlastname: v.hlastname,
                            jobTitle: v.jobTitle,
                            plastname: v.plastname,
                            date_interview: v.date_interview,
                            status: v.status,
                            created_at: v.created_at,
                        });
                    }
                });
        },
        hireRequiments: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "hireRequiments");
            axios.post('../../../backend/routes/applicant.php', data)
                .then(function (r) {
                    vue.getHireRequiments = [];

                    for (var v of r.data) {
                        vue.getHireRequiments.push({
                            firstname: v.firstname,
                            lastname: v.lastname,
                            requirements: v.requirements,
                            jobTitle: v.jobTitle,
                            hired_user_id: v.hired_user_id,
                            homeowner_id: v.homeowner_id,
                            hired_id: v.hired_id,
                            date_interview: v.date_interview,
                            status: v.status,
                        });
                    }
                });
        },
        MyPostApplication: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "myApplication");
            axios.post('../../../backend/routes/applicant.php', data)
                .then(function (r) {
                    vue.getMyPostApplication = [];

                    for (var v of r.data) {
                        vue.getMyPostApplication.push({
                            appli_id: v.appli_id,
                            user_id: v.user_id,
                            picture: v.picture,
                            fullname: v.fullname,
                            age: v.age,
                            skills: v.skills,
                            status: v.status,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                        });
                    }
                });
        },
        getCategorySelected: function () {
            var urlParams = new URLSearchParams(window.location.search);
            var category = urlParams.get('category');
            const vue = this;
            var data = new FormData();
            data.append("method", "jobs");
            axios.post('../../../backend/routes/applicant.php', data)
                .then(function (r) {
                    vue.selectedCategory = [];

                    for (var v of r.data) {
                        if (v.job_cat == category) {
                            vue.selectedCategory.push({
                                job_id: v.job_id,
                                user_id: v.user_id,
                                job_title: v.job_title,
                                job_cat: v.job_cat,
                                picture: v.picture,
                                firstname: v.firstname,
                                job_descrip: v.job_descrip,
                                job_status: v.job_status,
                                created_at: v.created_at,
                                updated_at: v.updated_at,
                            });
                        }
                    }
                });
        },
        getUserId: function (id) {
            this.userIdes = id;
        },
        getTypesSelected: function () {
            var urlParams = new URLSearchParams(window.location.search);
            var jobTypes = urlParams.get('jobTypes');
            const vue = this;
            var data = new FormData();
            data.append("method", "jobs");
            axios.post('../../../backend/routes/applicant.php', data)
                .then(function (r) {
                    vue.selectedTypes = [];

                    for (var v of r.data) {
                        if (v.job_types == jobTypes) {
                            vue.selectedTypes.push({
                                job_id: v.job_id,
                                user_id: v.user_id,
                                job_title: v.job_title,
                                job_cat: v.job_cat,
                                picture: v.picture,
                                job_types: v.job_types,
                                firstname: v.firstname,
                                job_descrip: v.job_descrip,
                                job_status: v.job_status,
                                created_at: v.created_at,
                                updated_at: v.updated_at,
                            });
                        }
                    }
                });
        },
        getRequimentsMessage: function () {
            var urlParams = new URLSearchParams(window.location.search);
            var id = urlParams.get('appli');
            const vue = this;
            var data = new FormData();
            data.append("method", "requiments");
            data.append("id", id);
            axios.post('../../../backend/routes/applicant.php', data)
                .then(function (r) {
                    vue.requirements = [];

                    for (var v of r.data) {
                        vue.requirements.push({
                            message: v.message
                        });
                    }
                });
        },
        jobs: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "jobs");
            axios.post('../../../backend/routes/applicant.php', data)
                .then(function (r) {
                    vue.job = [];

                    for (var v of r.data) {
                        vue.job.push({
                            job_id: v.job_id,
                            user_id: v.user_id,
                            job_title: v.job_title,
                            job_cat: v.job_cat,
                            exdate: v.exdate,
                            location: v.location,
                            picture: v.picture,
                            job_types: v.job_types,
                            firstname: v.firstname,
                            job_descrip: v.job_descrip,
                            job_status: v.job_status,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                        });
                    }
                });
        },
        deleteThisApplication: function (id) {
            const vue = this;
            var data = new FormData();
            data.append("method", "deleteApplication");
            data.append("id", id);
            axios.post('../../../backend/routes/applicant.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert('Successfully deleted!');
                    } else {
                        alert(r.data);
                    }
                });
        },
        allCategories: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "jobs");
            axios.post('../../../backend/routes/applicant.php', data)
                .then(function (r) {
                    vue.categories = [];

                    for (var v of r.data) {
                        vue.categories.push({ category: v.job_cat });
                    }
                });
        },
        apply: function (ids) {
            const vue = this;
            var data = new FormData();
            data.append("method", "applyJob");
            data.append("id", ids);
            axios.post('../../../backend/routes/applicant.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert("Successfully Send Application!");
                    } else if (r.data == 401) {
                        alert('Already Applied to this Application!');
                    } else {
                        alert(r.data);
                    }

                });
        },
        userLogin: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "userLogin");
            axios.post('../../../backend/routes/applicant.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.fullname = v.lastname + ', ' + v.firstname;
                        vue.vfullname = v.firstname;
                        vue.vlastname = v.lastname;
                        vue.email = v.email;
                        vue.picture = v.picture;
                        vue.status = v.status;
                    }
                });
        },
        dateString: function (date) {
            var originalDate = new Date(date);
            var formattedDate = originalDate.toDateString();
            return formattedDate;
        },
        getHistory: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "hireds");
            axios.post('../../../backend/routes/applicant.php', data)
                .then(function (r) {
                    vue.hiredApplicants = [];
                    for (var v of r.data) {
                        if (v.status == 10) {
                            vue.hiredApplicants.push({
                                hired_id: v.hired_id,
                                jobTitle: v.jobTitle,
                                homeowner_id: v.homeowner_id,
                                hired_user_id: v.hired_user_id,
                                created_at: v.created_at,
                                user_id: v.user_id,
                                firstname: v.firstname,
                                fullname: v.fullname,
                                lastname: v.lastname,
                                picture: v.picture,
                                status: v.status,
                            })
                        }
                    }
                });
        }
    },
    created: function () {
        this.jobs();
        this.userLogin();
        this.allCategories();
        this.getCategorySelected();
        this.hireRequiments();
        this.MyPostApplication();
        this.getTypesSelected();
        this.getRequimentsMessage();
        this.getApplicantUsers();
        this.getHistory();
    }
}).mount('#homeaid-applicant')