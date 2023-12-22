const { createApp } = Vue;

createApp({
    data() {
        return {
            allUsers: [],
            allMessage: [],
            id: 0,
            message: '',
            fullname: '',
        }
    },
    methods: {
        getAllUsers: function () {
            const vue = this;
            var data = new FormData();
            data.append("METHOD", "getAllWhoMessage");
            axios.post('/homaid/backend/routes/chat.php', data)
                .then(function (r) {
                    vue.allUsers = [];

                    for (var v of r.data) {
                        vue.allUsers.push({
                            message: v.message,
                            sender: v.sender,
                            sendPic: v.sendPic,
                            lastname: v.lastname,
                            firstname: v.firstname,
                            message: v.message,
                        });
                    }
                });
        },
        selectedUI() {
            var url = new URLSearchParams(window.location.search);
            var chatID = url.get('id');
            this.id = chatID;
        },
        thisId() {
            const vue = this;
            var data = new FormData();
            data.append("METHOD", "sendchat");
            data.append("id", this.id);
            data.append("message", this.message);
            axios.post('/homaid/backend/routes/chat.php', data)
                .then(function (r) {
                    if (r.data == 400) {
                        alert(r.data);
                    }
                    vue.message = '';
                    vue.getAllMessage();
                });
        },
        getAllMessage() {
            var url = new URLSearchParams(window.location.search);
            var chatID = url.get('id');
            const vue = this;
            var data = new FormData();
            data.append("METHOD", "getAllMessage");
            data.append("id", chatID);
            axios.post('/homaid/backend/routes/chat.php', data)
                .then(function (r) {
                    vue.allMessage = [];

                    for (var v of r.data) {
                        vue.fullname = v.rel + ', ' + v.ref;
                        if (v.sender) {
                            vue.allMessage.push({
                                message: v.message,
                                sender: v.sender,
                                reciever: v.reciever,
                                sendPic: v.sendPic,
                                firstname: v.firstname,
                                lastname: v.lastname,
                                recPic: v.recPic,
                                ref: v.ref,
                                rel: v.rel,
                            });
                        }
                    }
                });
        }
    },
    created: function () {
        this.getAllUsers();
        this.getAllMessage();
        this.selectedUI();
    }
}).mount('#chatHub')