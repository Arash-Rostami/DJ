function modalController() {
    return {
        db: [
            {'homeTitle': false}, {'homeText': false}, {'aboutMeTitle': false},
            {'aboutMeText': false}, {'galleryImage': false}, {'galleryRemove': false},
            {'missionTitle': false}, {'missionText': false}, {'educationTitle': false},
            {'addEducationText': false}, {'editEducationText': false}, {'deleteEducationText': false},
            {'editProfessor': false}, {'occupationTitle': false}, {'addOccupationText': false},
            {'editOccupationText': false}, {'deleteOccupationText': false}, {'projectTitle': false},
            {'addProject': false}, {'editProject': false}, {'deleteProject': false},
            {'blogTitle': false}, {'addPost': false}, {'deletePost': false},
            {'showMessage': false}, {'sendMessage': false}, {'deleteMessage': false},
            {'contact': false}, {'old': true}, {'time': "yes"},
        ], updateTime: ' ',
        init() {
            // if page was in pagination mode, load the showContact tab & modal in order
            window.location.search.includes('page')
                ?
                $("#showContact").trigger("click") &&
                setTimeout(() => document.querySelector('#questions').click(), 100)
                : null;

            // to receive the time of update of each table from LIVEWIRE emitted event
            window.addEventListener('time-update', e => this.updateTime = e.detail.time)
        },
        resetDb() { // just load modal content
            for (let item in this.db)
                this.db[item] = false;
        },
        emitUpdateEvent(el) {
            return this.$wire.showUpdate(el.dataset.target.substr(1));
        },
        triggerModal(refs, el) {
            refs.modal.setAttribute('id', el.dataset.target.substr(1));
        },
        fireModal(refs, el) { // modals for all items
            this.resetDb(); // hide all items

            this.emitUpdateEvent(el); // send th type of table to livewire

            this.triggerModal(refs, el); // change the id of modal according to request

            this.db[el.dataset.x] = !this.db[el.dataset.x]; // show just the clicked item
        },
        bindData(file, description) {
            let formData = new FormData();
            formData.append('filename', file.files[0]);
            formData.append('description', description.value);
            return formData;
        },
        sendCsrf() { // prepare csrf_field()
            axios.defaults.headers.common = {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            };
        },
        addImage(file, description) {
            let formData = this.bindData(file, description);

            this.sendCsrf();

            axios.post('/gallery', formData, {headers: {'Content-Type': 'multipart/form-data',}}
            ).then(function (response) {
                location.reload();
            }).catch(function (error) {
                console.log(error);
            });
        },
        deleteImage() {
            let modal = this;
            bootbox.confirm({
                message: "Are you sure?", swapButtonOrder: true,
                buttons: {confirm: {label: 'Yes', className: 'btn-danger'}, cancel: {label: 'No'}},
                callback: function (result) {
                    return (result === true) ? modal.$wire.emit('deleteImage') : null;
                }
            })
        },
        deleteEducation() {
            let modal = this;
            bootbox.confirm({
                message: "Are you sure?", swapButtonOrder: true,
                buttons: {confirm: {label: 'Yes', className: 'btn-danger'}, cancel: {label: 'No'}},
                callback: function (result) {
                    return (result === true) ? modal.$wire.emit('deleteCourse') : null;
                }
            })
        },
        deleteOccupation() {
            let modal = this;
            bootbox.confirm({
                message: "Are you sure?", swapButtonOrder: true,
                buttons: {confirm: {label: 'Yes', className: 'btn-danger'}, cancel: {label: 'No'}},
                callback: function (result) {
                    return (result === true) ? modal.$wire.emit('deleteExperience') : null;
                }
            })
        },
        deleteProject() {
            let modal = this;
            bootbox.confirm({
                message: "Are you sure?", swapButtonOrder: true,
                buttons: {confirm: {label: 'Yes', className: 'btn-danger'}, cancel: {label: 'No'}},
                callback: function (result) {
                    return (result === true) ? modal.$wire.emit('deleteProject') : null;
                }
            })
        },
        validateAudio() {
            // if file exists & format is MP3, give false message
            if (this.$refs.piece.files[0] !== undefined) {
                return this.$refs.piece.files[0].type != 'audio/mpeg';
            }
            return false;
        },
        bindTrack() {
            let formData = new FormData();
            formData.append('filename', this.$refs.piece.files[0]);
            formData.append('title', this.$refs.pieceTitle.value);
            formData.append('description', this.$refs.pieceDes.value);
            formData.append('date', this.$refs.pieceDate.value);
            formData.append('title_f', this.$refs.pieceTitle_f.value);
            formData.append('description_f', this.$refs.pieceDes_f.value);
            return formData;
        },
        addAudio() {
            if (this.validateAudio()) {
                return bootbox.alert('The format of file is not supported!')
            }
            let formData = this.bindTrack();

            this.sendCsrf();

            axios.post('/aud', formData, {headers: {'Content-Type': 'multipart/form-data',}}
            ).then(function (response) {
                location.reload();
            }).catch(function (error) {
                console.log(error);
            });
        },
        validatePost() {
            // if no file is uploaded
            if (this.$refs.postPic.files[0] === undefined || this.$refs.postFile.files[0] === undefined) {
                bootbox.alert('Files are not properly uploaded; retry.');
                return true;
            }
            // if file exists & formats are not jpeg or MP3
            if (this.$refs.postPic.files[0] !== undefined || this.$refs.postFile.files[0] !== undefined) {
                return this.$refs.postPic.files[0].type === 'image/jpeg'
                    &&
                    this.$refs.postFile.files[0].type === 'audio/mpeg';
            }
        },
        bindPost() {
            let formData = new FormData();
            formData.append('title', this.$refs.postTitle.value);
            formData.append('description', this.$refs.postCaption.value);
            formData.append('image', this.$refs.postPic.files[0]);
            formData.append('title_f', this.$refs.postTitleFarsi.value);
            formData.append('audio', this.$refs.postFile.files[0]);
            return formData;
        },
        addPost() {
            if (!this.validatePost()) {
                return bootbox.alert('The format of file is not supported!')
            }
            let formData = this.bindPost();

            this.sendCsrf();

            axios.post('/post', formData, {headers: {'Content-Type': 'multipart/form-data',}}
            ).then(function (response) {
                location.reload();
            }).catch(function (error) {
                console.log(error);
            });
        },
        deletePost() {
            let modal = this;
            bootbox.confirm({
                message: "Are you sure?", swapButtonOrder: true,
                buttons: {confirm: {label: 'Yes', className: 'btn-danger'}, cancel: {label: 'No'}},
                callback: function (result) {
                    return (result === true) ? modal.$wire.emit('deletePost') : null;
                }
            })
        },
        clearList() {
            // remove the paginator page
            window.location.search = ''
        },
        switchContact() {
            return this.db['old'] = (this.db['contact'] == 'Saved');
        },
        deleteMessage() {
            let modal = this;
            bootbox.confirm({
                message: "Are you sure?", swapButtonOrder: true,
                buttons: {confirm: {label: 'Yes', className: 'btn-danger'}, cancel: {label: 'No'}},
                callback: function (result) {
                    return (result === true) ? modal.$wire.emit('deleteMessage') : null;
                }
            })
        },
    }
}
