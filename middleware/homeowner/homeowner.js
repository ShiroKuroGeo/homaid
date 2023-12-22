const { createApp } = Vue;

createApp({
    data() {
        return {
            applicants: [],
            profileApplicants: [],
            profileDetailsData: [],
            hiredApplicants: [],
            CommentData: [],
            applyingJobs: [],
            jobPosteds: [],
            fullname: '',
            comment: '',
            jobTitle: '',
            messsageHired: '',
            messsage: '',
            types: '',
            joblocation: '',
            jobCategory: '',
            jobDescrip: '',
            Myfirstname: '',
            Mylastname: '',
            appl_ids: 0,
            userIdes: 0,
            user_ids: 0,
            myStatus: 0,
            idHireReq: 0,
        }
    },
    methods: {
        sendHiredReq: function (id) {
            this.idHireReq = id;
        },
        getUserId: function (id) {
            this.userIdes = id;
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
        getAllApplicant: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "getAllApplicant");
            axios.post('../../../backend/routes/homeowner.php', data)
                .then(function (r) {
                    vue.applicants = [];

                    for (var v of r.data) {
                        vue.applicants.push({
                            appli_id: v.appli_id,
                            picture: v.picture,
                            age: v.age,
                            skills: v.skills,
                            status: v.status,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                            firstname: v.firstname,
                            lastname: v.lastname,
                            user_id: v.user_id,
                        })
                    }
                });
        },
        applicantsProfile: function () {
            let queryParams = new URLSearchParams(window.location.search);
            let id = queryParams.get('id');
            const vue = this;

            var data = new FormData();
            data.append("method", "applicantsProfile");
            data.append("id", id);
            axios.post('../../../backend/routes/homeowner.php', data)
                .then(function (r) {
                    vue.profileApplicants = [];

                    for (var v of r.data) {
                        vue.profileApplicants.push({
                            user_id: v.user_id,
                            age: v.age,
                            skills: v.skills,
                            firstname: v.firstname,
                            lastname: v.lastname,
                            username: v.username,
                            email: v.email,
                            password: v.password,
                            picture: v.picture,
                            valid_id: v.valid_id,
                            role: v.role,
                            status: v.status,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                        })
                    }
                });
        },
        profileDetails: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "profileDetails");
            axios.post('../../../backend/routes/homeowner.php', data)
                .then(function (r) {
                    vue.profileDetailsData = [];

                    for (var v of r.data) {
                        vue.profileDetailsData.push({
                            user_id: v.user_id,
                            firstname: v.firstname,
                            lastname: v.lastname,
                            username: v.username,
                            email: v.email,
                            role: v.role,
                            status: v.status,
                            picture: v.picture,
                            valid_id: v.valid_id,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                        })
                    }
                });
        },
        myProfile: function () {
            const vue = this;

            var data = new FormData();
            data.append("method", "MyProfile");
            axios.post('../../../backend/routes/homeowner.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.Myfirstname = v.firstname;
                        vue.Mylastname = v.lastname;
                        vue.fullname = v.lastname +', '+ v.firstname;
                        vue.myStatus = v.status;
                    }
                });
        },
        hireds: function () {
            const vue = this;

            var data = new FormData();
            data.append("method", "hireds");
            axios.post('../../../backend/routes/homeowner.php', data)
                .then(function (r) {
                    vue.hiredApplicants = [];
                    for (var v of r.data) {
                        vue.hiredApplicants.push({
                            hired_id: v.hired_id,
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
                });
        },
        hireThisPersion: function (id) {
            const vue = this;

            var data = new FormData();
            data.append("method", "hiredThisPerson");
            data.append("id", id);
            axios.post('../../../backend/routes/homeowner.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert("Successfully Hired!");
                    } else if (r.data == 401) {
                        alert('Already hired this person!');
                    } else {
                        alert("Not Successfull");
                    }
                });
        },
        requirementsOfHired: function (id) {
            const vue = this;

            var data = new FormData();
            data.append("method", "requirementsOfHired");
            data.append("message", vue.messsageHired);
            data.append("id", id);
            axios.post('../../../backend/routes/homeowner.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert("Successfully Hired!");
                    } else {
                        alert("Not Successfull");
                    }
                });
        },
        hired: function (id) {
            const vue = this;

            var data = new FormData();
            data.append("method", "hired");
            data.append("id", id);
            axios.post('../../../backend/routes/homeowner.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert("Successfully Hired!");
                        vue.hireds();
                    } else {
                        alert("Not Successfull");
                    }
                });
        },
        requirementsOfApplying: function (apply, id) {
            const vue = this;
            if (vue.messsage != '') {
                var data = new FormData();
                data.append("method", "requirementsOfApplying");
                data.append("applyId", apply);
                data.append("user_id", id);
                data.append("message", vue.messsage);
                axios.post('../../../backend/routes/homeowner.php', data)
                    .then(function (r) {
                        if (r.data == 200) {
                            alert("Successfully Send!");
                        } else {
                            alert("Not Successfull");
                        }
                    });
            } else {
                alert('Enter Message!');
            }

        },
        isDisabled(status) {
            if (status == 1) {
                return true;
            } else {
                return false;
            }
        },
        thisPersonsComment: function (id) {
            const vue = this;

            var data = new FormData();
            data.append("method", "comment");
            data.append("id", id);
            data.append("comment", vue.comment);
            axios.post('../../../backend/routes/homeowner.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        vue.AllCommentss();
                    } else {
                        alert("Not Successfull");
                    }
                });
        },
        AllComments: function () {
            let queryParams = new URLSearchParams(window.location.search);
            let id = queryParams.get('id');

            const vue = this;
            var data = new FormData();
            data.append("method", "allComment");
            data.append("id", id);
            axios.post('../../../backend/routes/homeowner.php', data)
                .then(function (r) {
                    vue.CommentData = [];
                    for (var v of r.data) {
                        vue.CommentData.push({
                            firstname: v.firstname,
                            lastname: v.lastname,
                            picture: v.picture,
                            comment: v.comment,
                            created_at: v.created_at,
                        })
                    }
                });
        },
        jobPostedDetails: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "jobPostedDetails");
            axios.post('../../../backend/routes/homeowner.php', data)
                .then(function (r) {
                    vue.jobPosteds = [];
                    for (var v of r.data) {
                        vue.jobPosteds.push({
                            job_id: v.job_id,
                            user_id: v.user_id,
                            job_title: v.job_title,
                            job_cat: v.job_cat,
                            job_descrip: v.job_descrip,
                            job_status: v.job_status,
                            picture: v.picture,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                        })
                    }
                });
        },
        applicantApplying: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "applicantApplying");
            axios.post('../../../backend/routes/homeowner.php', data)
                .then(function (r) {
                    vue.applyingJobs = [];
                    for (var v of r.data) {
                        vue.applyingJobs.push({
                            firstname: v.firstname,
                            lastname: v.lastname,
                            picture: v.picture,
                            appl_id: v.appl_id,
                            user_id: v.user_id,
                            homeowner_id: v.homeowner_id,
                            status: v.status,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                            user_id: v.user_id,
                        })
                    }
                });
        },
        updateApplicantApplying: function (id) {
            const vue = this;
            var data = new FormData();
            data.append("method", "updateApplicantApplying");
            data.append("id", id);
            axios.post('../../../backend/routes/homeowner.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert("Success");
                        vue.applicantApplying();
                    } else {
                        alert(r.data);
                    }
                });
        },
        updateProfile: function (id) {
            const vue = this;
            var data = new FormData();
            data.append("method", "updateProfile");
            data.append("picture", document.getElementById('picture').files[0]);
            data.append("firstname", vue.firstname);
            data.append("lastname", vue.lastname);
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
        },
        storeJobs: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "storeJobs");
            data.append("jobTitle", vue.jobTitle);
            data.append("jobCategory", vue.jobCategory);
            data.append("jobDescrip", vue.jobDescrip);
            data.append("jobLocation", vue.joblocation);
            data.append("types", vue.types);
            axios.post('../../../backend/routes/homeowner.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert("Success");
                        window.location.reload();
                    } else {
                        alert(r.data);
                    }
                });
        },
        sendDatas: function (apply, id) {
            this.appl_ids = apply;
            this.user_ids = id;
        },
    },
    created: function () {
        this.getAllApplicant();
        this.applicantsProfile();
        this.myProfile();
        this.jobPostedDetails();
        this.hireds();
        this.AllComments();
        this.applicantApplying();
        this.profileDetails();
    }
}).mount('#homeaid-homeowner')