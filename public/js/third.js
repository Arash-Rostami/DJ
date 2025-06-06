!function(t,e){"use strict";"function"==typeof define&&define.amd?define(["jquery"],e):"object"==typeof exports?module.exports=e(require("jquery")):t.bootbox=e(t.jQuery)}(this,function e(c,p){"use strict";var r,n,i,l;Object.keys||(Object.keys=(r=Object.prototype.hasOwnProperty,n=!{toString:null}.propertyIsEnumerable("toString"),l=(i=["toString","toLocaleString","valueOf","hasOwnProperty","isPrototypeOf","propertyIsEnumerable","constructor"]).length,function(t){if("function"!=typeof t&&("object"!=typeof t||null===t))throw new TypeError("Object.keys called on non-object");var e,o,a=[];for(e in t)r.call(t,e)&&a.push(e);if(n)for(o=0;o<l;o++)r.call(t,i[o])&&a.push(i[o]);return a}));var u={};u.VERSION="5.5.2";var s={en:{OK:"OK",CANCEL:"Cancel",CONFIRM:"OK"}},d={dialog:'<div class="bootbox modal" tabindex="-1" role="dialog" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="bootbox-body"></div></div></div></div></div>',header:'<div class="modal-header"><h5 class="modal-title"></h5></div>',footer:'<div class="modal-footer"></div>',closeButton:'<button type="button" class="bootbox-close-button close" aria-hidden="true">&times;</button>',form:'<form class="bootbox-form"></form>',button:'<button type="button" class="btn"></button>',option:"<option></option>",promptMessage:'<div class="bootbox-prompt-message"></div>',inputs:{text:'<input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text" />',textarea:'<textarea class="bootbox-input bootbox-input-textarea form-control"></textarea>',email:'<input class="bootbox-input bootbox-input-email form-control" autocomplete="off" type="email" />',select:'<select class="bootbox-input bootbox-input-select form-control"></select>',checkbox:'<div class="form-check checkbox"><label class="form-check-label"><input class="form-check-input bootbox-input bootbox-input-checkbox" type="checkbox" /></label></div>',radio:'<div class="form-check radio"><label class="form-check-label"><input class="form-check-input bootbox-input bootbox-input-radio" type="radio" name="bootbox-radio" /></label></div>',date:'<input class="bootbox-input bootbox-input-date form-control" autocomplete="off" type="date" />',time:'<input class="bootbox-input bootbox-input-time form-control" autocomplete="off" type="time" />',number:'<input class="bootbox-input bootbox-input-number form-control" autocomplete="off" type="number" />',password:'<input class="bootbox-input bootbox-input-password form-control" autocomplete="off" type="password" />',range:'<input class="bootbox-input bootbox-input-range form-control-range" autocomplete="off" type="range" />'}},b={locale:"en",backdrop:"static",animate:!0,className:null,closeButton:!0,show:!0,container:"body",value:"",inputType:"text",swapButtonOrder:!1,centerVertical:!1,multiple:!1,scrollable:!1,reusable:!1};function f(t,e,o){return c.extend(!0,{},t,function(t,e){var o=t.length,a={};if(o<1||2<o)throw new Error("Invalid argument length");return 2===o||"string"==typeof t[0]?(a[e[0]]=t[0],a[e[1]]=t[1]):a=t[0],a}(e,o))}function m(t,e,o,a){a&&a[0]&&(i=a[0].locale||b.locale,(a[0].swapButtonOrder||b.swapButtonOrder)&&(e=e.reverse()));var r,n,i={className:"bootbox-"+t,buttons:function(t,e){for(var o={},a=0,r=t.length;a<r;a++){var n=t[a],i=n.toLowerCase(),n=n.toUpperCase();o[i]={label:function(t,e){e=s[e];return(e||s.en)[t]}(n,e)}}return o}(e,i)};return o=f(i,a,o),n={},w(r=e,function(t,e){n[e]=!0}),w(o.buttons,function(t){if(n[t]===p)throw new Error('button key "'+t+'" is not allowed (options are '+r.join(" ")+")")}),o}function h(t){return Object.keys(t).length}function w(t,o){var a=0;c.each(t,function(t,e){o(t,e,a++)})}function g(t){t.data.dialog.find(".bootbox-accept").first().trigger("focus")}function v(t){t.target===t.data.dialog[0]&&t.data.dialog.remove()}function y(t){t.target===t.data.dialog[0]&&(t.data.dialog.off("escape.close.bb"),t.data.dialog.off("click"))}function x(t,e,o){t.stopPropagation(),t.preventDefault(),c.isFunction(o)&&!1===o.call(e,t)||e.modal("hide")}function k(t){return/([01][0-9]|2[0-3]):[0-5][0-9]?:[0-5][0-9]/.test(t)}function E(t){return/(\d{4})-(\d{2})-(\d{2})/.test(t)}return u.locales=function(t){return t?s[t]:s},u.addLocale=function(t,o){return c.each(["OK","CANCEL","CONFIRM"],function(t,e){if(!o[e])throw new Error('Please supply a translation for "'+e+'"')}),s[t]={OK:o.OK,CANCEL:o.CANCEL,CONFIRM:o.CONFIRM},u},u.removeLocale=function(t){if("en"===t)throw new Error('"en" is used as the default and fallback locale and cannot be removed.');return delete s[t],u},u.setLocale=function(t){return u.setDefaults("locale",t)},u.setDefaults=function(){var t={};return 2===arguments.length?t[arguments[0]]=arguments[1]:t=arguments[0],c.extend(b,t),u},u.hideAll=function(){return c(".bootbox").modal("hide"),u},u.init=function(t){return e(t||c)},u.dialog=function(t){if(c.fn.modal===p)throw new Error('"$.fn.modal" is not defined; please double check you have included the Bootstrap JavaScript library. See https://getbootstrap.com/docs/4.4/getting-started/javascript/ for more details.');t=function(a){var r,n;if("object"!=typeof a)throw new Error("Please supply an object of options");if(!a.message)throw new Error('"message" option must not be null or an empty string.');(a=c.extend({},b,a)).backdrop?a.backdrop="string"!=typeof a.backdrop||"static"!==a.backdrop.toLowerCase()||"static":a.backdrop=!1!==a.backdrop&&0!==a.backdrop&&"static";a.buttons||(a.buttons={});return r=a.buttons,n=h(r),w(r,function(t,e,o){if(c.isFunction(e)&&(e=r[t]={callback:e}),"object"!==c.type(e))throw new Error('button with key "'+t+'" must be an object');e.label||(e.label=t),e.className||(t=!1,t=a.swapButtonOrder?0===o:o===n-1,e.className=n<=2&&t?"btn-primary":"btn-secondary btn-default")}),a}(t),c.fn.modal.Constructor.VERSION?(t.fullBootstrapVersion=c.fn.modal.Constructor.VERSION,i=t.fullBootstrapVersion.indexOf("."),t.bootstrap=t.fullBootstrapVersion.substring(0,i)):(t.bootstrap="2",t.fullBootstrapVersion="2.3.2",console.warn("Bootbox will *mostly* work with Bootstrap 2, but we do not officially support it. Please upgrade, if possible."));var o=c(d.dialog),e=o.find(".modal-dialog"),a=o.find(".modal-body"),r=c(d.header),n=c(d.footer),i=t.buttons,l={onEscape:t.onEscape};if(a.find(".bootbox-body").html(t.message),0<h(t.buttons)&&(w(i,function(t,e){var o=c(d.button);switch(o.data("bb-handler",t),o.addClass(e.className),t){case"ok":case"confirm":o.addClass("bootbox-accept");break;case"cancel":o.addClass("bootbox-cancel")}o.html(e.label),n.append(o),l[t]=e.callback}),a.after(n)),!0===t.animate&&o.addClass("fade"),t.className&&o.addClass(t.className),t.size)switch(t.fullBootstrapVersion.substring(0,3)<"3.1"&&console.warn('"size" requires Bootstrap 3.1.0 or higher. You appear to be using '+t.fullBootstrapVersion+". Please upgrade to use this option."),t.size){case"small":case"sm":e.addClass("modal-sm");break;case"large":case"lg":e.addClass("modal-lg");break;case"extra-large":case"xl":e.addClass("modal-xl"),t.fullBootstrapVersion.substring(0,3)<"4.2"&&console.warn('Using size "xl"/"extra-large" requires Bootstrap 4.2.0 or higher. You appear to be using '+t.fullBootstrapVersion+". Please upgrade to use this option.")}if(t.scrollable&&(e.addClass("modal-dialog-scrollable"),t.fullBootstrapVersion.substring(0,3)<"4.3"&&console.warn('Using "scrollable" requires Bootstrap 4.3.0 or higher. You appear to be using '+t.fullBootstrapVersion+". Please upgrade to use this option.")),t.title&&(a.before(r),o.find(".modal-title").html(t.title)),t.closeButton&&(r=c(d.closeButton),t.title?3<t.bootstrap?o.find(".modal-header").append(r):o.find(".modal-header").prepend(r):r.prependTo(a)),t.centerVertical&&(e.addClass("modal-dialog-centered"),t.fullBootstrapVersion<"4.0.0"&&console.warn('"centerVertical" requires Bootstrap 4.0.0-beta.3 or higher. You appear to be using '+t.fullBootstrapVersion+". Please upgrade to use this option.")),t.reusable||o.one("hide.bs.modal",{dialog:o},y),t.onHide){if(!c.isFunction(t.onHide))throw new Error('Argument supplied to "onHide" must be a function');o.on("hide.bs.modal",t.onHide)}if(t.reusable||o.one("hidden.bs.modal",{dialog:o},v),t.onHidden){if(!c.isFunction(t.onHidden))throw new Error('Argument supplied to "onHidden" must be a function');o.on("hidden.bs.modal",t.onHidden)}if(t.onShow){if(!c.isFunction(t.onShow))throw new Error('Argument supplied to "onShow" must be a function');o.on("show.bs.modal",t.onShow)}if(o.one("shown.bs.modal",{dialog:o},g),t.onShown){if(!c.isFunction(t.onShown))throw new Error('Argument supplied to "onShown" must be a function');o.on("shown.bs.modal",t.onShown)}return!0===t.backdrop&&o.on("click.dismiss.bs.modal",function(t){o.children(".modal-backdrop").length&&(t.currentTarget=o.children(".modal-backdrop").get(0)),t.target===t.currentTarget&&o.trigger("escape.close.bb")}),o.on("escape.close.bb",function(t){l.onEscape&&x(t,o,l.onEscape)}),o.on("click",".modal-footer button:not(.disabled)",function(t){var e=c(this).data("bb-handler");e!==p&&x(t,o,l[e])}),o.on("click",".bootbox-close-button",function(t){x(t,o,l.onEscape)}),o.on("keyup",function(t){27===t.which&&o.trigger("escape.close.bb")}),c(t.container).append(o),o.modal({backdrop:t.backdrop,keyboard:!1,show:!1}),t.show&&o.modal("show"),o},u.alert=function(){var t=m("alert",["ok"],["message","callback"],arguments);if(t.callback&&!c.isFunction(t.callback))throw new Error('alert requires the "callback" property to be a function when provided');return t.buttons.ok.callback=t.onEscape=function(){return!c.isFunction(t.callback)||t.callback.call(this)},u.dialog(t)},u.confirm=function(){var t=m("confirm",["cancel","confirm"],["message","callback"],arguments);if(!c.isFunction(t.callback))throw new Error("confirm requires a callback");return t.buttons.cancel.callback=t.onEscape=function(){return t.callback.call(this,!1)},t.buttons.confirm.callback=function(){return t.callback.call(this,!0)},u.dialog(t)},u.prompt=function(){var e,r,t,o=c(d.form),n=m("prompt",["cancel","confirm"],["title","callback"],arguments);if(n.value||(n.value=b.value),n.inputType||(n.inputType=b.inputType),t=(n.show===p?b:n).show,n.show=!1,n.buttons.cancel.callback=n.onEscape=function(){return n.callback.call(this,null)},n.buttons.confirm.callback=function(){var t;if("checkbox"===n.inputType)t=r.find("input:checked").map(function(){return c(this).val()}).get();else if("radio"===n.inputType)t=r.find("input:checked").val();else{if(r[0].checkValidity&&!r[0].checkValidity())return!1;t="select"===n.inputType&&!0===n.multiple?r.find("option:selected").map(function(){return c(this).val()}).get():r.val()}return n.callback.call(this,t)},!n.title)throw new Error("prompt requires a title");if(!c.isFunction(n.callback))throw new Error("prompt requires a callback");if(!d.inputs[n.inputType])throw new Error("Invalid prompt type");switch(r=c(d.inputs[n.inputType]),n.inputType){case"text":case"textarea":case"email":case"password":r.val(n.value),n.placeholder&&r.attr("placeholder",n.placeholder),n.pattern&&r.attr("pattern",n.pattern),n.maxlength&&r.attr("maxlength",n.maxlength),n.required&&r.prop({required:!0}),n.rows&&!isNaN(parseInt(n.rows))&&"textarea"===n.inputType&&r.attr({rows:n.rows});break;case"date":case"time":case"number":case"range":if(r.val(n.value),n.placeholder&&r.attr("placeholder",n.placeholder),n.pattern&&r.attr("pattern",n.pattern),n.required&&r.prop({required:!0}),"date"!==n.inputType&&n.step){if(!("any"===n.step||!isNaN(n.step)&&0<parseFloat(n.step)))throw new Error('"step" must be a valid positive number or the value "any". See https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#attr-step for more information.');r.attr("step",n.step)}!function(t,e,o){var a=!1,r=!0,n=!0;if("date"===t)e===p||(r=E(e))?o===p||(n=E(o))||console.warn('Browsers which natively support the "date" input type expect date values to be of the form "YYYY-MM-DD" (see ISO-8601 https://www.iso.org/iso-8601-date-and-time-format.html). Bootbox does not enforce this rule, but your max value may not be enforced by this browser.'):console.warn('Browsers which natively support the "date" input type expect date values to be of the form "YYYY-MM-DD" (see ISO-8601 https://www.iso.org/iso-8601-date-and-time-format.html). Bootbox does not enforce this rule, but your min value may not be enforced by this browser.');else if("time"===t){if(e!==p&&!(r=k(e)))throw new Error('"min" is not a valid time. See https://www.w3.org/TR/2012/WD-html-markup-20120315/datatypes.html#form.data.time for more information.');if(o!==p&&!(n=k(o)))throw new Error('"max" is not a valid time. See https://www.w3.org/TR/2012/WD-html-markup-20120315/datatypes.html#form.data.time for more information.')}else{if(e!==p&&isNaN(e))throw r=!1,new Error('"min" must be a valid number. See https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#attr-min for more information.');if(o!==p&&isNaN(o))throw n=!1,new Error('"max" must be a valid number. See https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#attr-max for more information.')}if(r&&n){if(o<=e)throw new Error('"max" must be greater than "min". See https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#attr-max for more information.');a=!0}return a}(n.inputType,n.min,n.max)||(n.min!==p&&r.attr("min",n.min),n.max!==p&&r.attr("max",n.max));break;case"select":var i={},a=n.inputOptions||[];if(!c.isArray(a))throw new Error("Please pass an array of input options");if(!a.length)throw new Error('prompt with "inputType" set to "select" requires at least one option');n.placeholder&&r.attr("placeholder",n.placeholder),n.required&&r.prop({required:!0}),n.multiple&&r.prop({multiple:!0}),w(a,function(t,e){var o=r;if(e.value===p||e.text===p)throw new Error('each option needs a "value" property and a "text" property');e.group&&(i[e.group]||(i[e.group]=c("<optgroup />").attr("label",e.group)),o=i[e.group]);var a=c(d.option);a.attr("value",e.value).text(e.text),o.append(a)}),w(i,function(t,e){r.append(e)}),r.val(n.value);break;case"checkbox":var l=c.isArray(n.value)?n.value:[n.value];if(!(a=n.inputOptions||[]).length)throw new Error('prompt with "inputType" set to "checkbox" requires at least one option');r=c('<div class="bootbox-checkbox-list"></div>'),w(a,function(t,o){if(o.value===p||o.text===p)throw new Error('each option needs a "value" property and a "text" property');var a=c(d.inputs[n.inputType]);a.find("input").attr("value",o.value),a.find("label").append("\n"+o.text),w(l,function(t,e){e===o.value&&a.find("input").prop("checked",!0)}),r.append(a)});break;case"radio":if(n.value!==p&&c.isArray(n.value))throw new Error('prompt with "inputType" set to "radio" requires a single, non-array value for "value"');if(!(a=n.inputOptions||[]).length)throw new Error('prompt with "inputType" set to "radio" requires at least one option');r=c('<div class="bootbox-radiobutton-list"></div>');var s=!0;w(a,function(t,e){if(e.value===p||e.text===p)throw new Error('each option needs a "value" property and a "text" property');var o=c(d.inputs[n.inputType]);o.find("input").attr("value",e.value),o.find("label").append("\n"+e.text),n.value!==p&&e.value===n.value&&(o.find("input").prop("checked",!0),s=!1),r.append(o)}),s&&r.find('input[type="radio"]').first().prop("checked",!0)}return o.append(r),o.on("submit",function(t){t.preventDefault(),t.stopPropagation(),e.find(".bootbox-accept").trigger("click")}),""!==c.trim(n.message)&&(a=c(d.promptMessage).html(n.message),o.prepend(a)),n.message=o,(e=u.dialog(n)).off("shown.bs.modal",g),e.on("shown.bs.modal",function(){r.focus()}),!0===t&&e.modal("show"),e},u});

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
