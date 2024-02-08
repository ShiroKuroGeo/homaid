const { createApp } = Vue;

createApp({
    data() {
        return {
            fullname: '',
            role: '',
            picture: '',
            selectAllNotApproved: 3,
            users: [],
            homeowner: [],
            getAllReported: [],
            countAdmin: 0,
            jobsCount: 0,
            getSelectedPicture: '',
            getSelectedValid: '',
            ids: 0,
            reportsCount: 0,
        }
    },
    methods: {
        getUsers: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "users");
            axios.post('../../backend/routes/admin.php', data)
                .then(function (r) {
                    vue.users = [];

                    for (var v of r.data) {
                        vue.fullname = v.firstname;
                        vue.picture = v.picture;
                        vue.role = v.role;
                        vue.users.push({
                            user_id: v.user_id,
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
                        });
                    }

                });
        },
        reportToRestrict: function (id) {
            const vue = this;
            var data = new FormData();
            data.append("method", "reportToRestrict");
            data.append("id", id);
            axios.post('../../backend/routes/admin.php', data)
                .then(function (r) {
                    if(r.data == 200){
                        alert('Reported restrict!');
                        window.location.reload();
                    }else{
                        alert(r.data);
                    }

                });
        },
        getReportedUsers: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "allReported");
            axios.post('../../backend/routes/admin.php', data)
                .then(function (r) {
                    vue.getAllReported = [];

                    for (var v of r.data) {
                        vue.getAllReported.push({
                            reason: v.reason,
                            statre: v.statre,
                            report_id: v.report_id,
                            created_at: v.created_at,
                            repFirstname: v.repFirstname,
                            repLastname: v.repLastname,
                            firstname: v.firstname,
                            lastname: v.lastname,
                            reported_id: v.reported_id,
                        });
                    }

                });
        },
        requestHomowner: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "requestHomowner");
            axios.post('../../backend/routes/admin.php', data)
                .then(function (r) {
                    vue.homeowner = [];

                    for (var v of r.data) {
                        vue.homeowner.push({
                            user_id: v.user_id,
                            firstname: v.firstname,
                            lastname: v.lastname,
                            username: v.username,
                            email: v.email,
                            password: v.password,
                            picture: v.picture,
                            valid_id: v.valid_id,
                            role: v.role,
                            stats: v.status,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                        });
                    }

                });
        },
        getUsersCount: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "usersCount");
            axios.post('../../backend/routes/admin.php', data)
                .then(function (r) {
                    vue.countAdmin = r.data.length;
                });
        },
        getJobsCount: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "jobsCount");
            axios.post('../../backend/routes/admin.php', data)
                .then(function (r) {
                    vue.jobsCount = r.data.length;
                });
        },
        changeStatus: function (id, stat) {
            const vue = this;
            var data = new FormData();
            data.append("method", "changeStatus");
            data.append("id", id);
            data.append("status", stat);
            axios.post('../../backend/routes/admin.php', data)
                .then(function (r) {
                    vue.requestHomowner();
                });
        },
        getReportsCount: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "reportsCount");
            axios.post('../../backend/routes/admin.php', data)
                .then(function (r) {
                    vue.reportsCount = r.data.length;
                });
        },
        selectedPicture: function (pic) {
            this.getSelectedPicture = pic;
        },
        selectedValid: function (pic) {
            this.getSelectedValid = pic;
        },
        chartReports: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "reportsCount");
            axios.post('../../backend/routes/admin.php', data)
                .then(function (r) {
                    echarts.init(document.querySelector("#trafficChart")).setOption({
                        tooltip: {
                            trigger: 'item'
                        },
                        legend: {
                            top: '5%',
                            left: 'center'
                        },
                        series: [{
                            name: 'Access From',
                            type: 'pie',
                            radius: ['40%', '70%'],
                            avoidLabelOverlap: false,
                            label: {
                                show: false,
                                position: 'center'
                            },
                            emphasis: {
                                label: {
                                    show: true,
                                    fontSize: '18',
                                    fontWeight: 'bold'
                                }
                            },
                            labelLine: {
                                show: false
                            },
                            data: [{
                                value: vue.jobsCount,
                                name: 'Jobs'
                            },
                            {
                                value: vue.reportsCount,
                                name: 'Reports'
                            },
                            {
                                value: vue.countAdmin,
                                name: 'Users'
                            }
                            ]
                        }]
                    });
                });
        },
        getUserId: function(id){
            this.ids = id;
        }
    },
    created: function () {
        this.getUsers();
        this.getUsersCount();
        this.getJobsCount();
        this.getReportedUsers   ();
        this.getReportsCount();
        this.chartReports();
        this.requestHomowner();
    },
    computed: {
        selectedApproved() {
            if (this.selectAllNotApproved == 3) {
                return this.homeowner;
            }

            return this.homeowner.filter(pr => pr.stats.toLowerCase().includes(this.selectAllNotApproved));
        }
    }
}).mount('#admin-admin')