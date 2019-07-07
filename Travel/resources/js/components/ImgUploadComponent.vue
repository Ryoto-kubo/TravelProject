<template>
    <div class="over">
        <label for="file-sample">
            <div class="drop">
                <input class="input" id="file-sample" type="file" name="user_img" @change="onFileChange">
                <i aria-hidden="true" class="fas fa-plus fa-7x"></i>
                <img class="img" id="file-preview" v-show="uploadedImage" :src="uploadedImage">
            </div>
        </label>
    </div>
</template>
 
<script>
export default {
    data() {
         return {
             uploadedImage: "",
         };
    },
    methods: {
        onFileChange(e) {
            let files = e.target.files;
            this.createImage(files[0]); //File情報格納
        },
        //アップロードした画像を表示
        createImage(file) {
            let reader = new FileReader(); //File API生成
            reader.onload = (e) => {
                this.uploadedImage = e.target.result;
            };

            reader.readAsDataURL(file);
        },
    },
 }
</script>

