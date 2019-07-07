<template>
    <div class="over">
        <label for="file-sample">
            <div class="drop">
                <input class="input" id="file-sample" type="file" v-on:change="onFileChange">
                <i aria-hidden="true" class="fas fa-plus fa-7x"></i>
                <img class="img" id="file-preview" v-show="uploadedImage" :src="uploadedImage">
            </div>
        </label>
    </div>
</template>
 
<script>
 new Vue({
    el: '#img-load',
    data() {
         return {
             uploadedImage: '',
         };
    },
    methods: {
        onFileChange(e) {
            let files = e.target.files || e.dataTransfer.files;
            this.createImage(files[0]);
        },
        //アップロードした画像を表示
        createImage(file) {
            let reader = new FileReader();
            reader.onload = (e) => {
                this.uploadedImage = e.target.result;
            };
            reader.readAsDataURL(file);
        },
    },
 })
</script>