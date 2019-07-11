<template>
    <div class="over">
        <label class="form-label" for="file-sample">
            <input class="input" id="file-sample" type="file" name="user_img" @change="onFileChange">
            <i aria-hidden="true" class="fas fa-plus fa-7x"></i>
            <img class="img" id="file-preview" v-if="imagePreview" :src="imagePreview">
        </label>
    </div>
</template>
 
<script>
export default {
    props: ['imagePath', 'image'],
    data() {
        return {
            //user_imgが登録されていない場合はno_img.jpegが表示される
            imagePreview: this.imagePath + (this.image ? this.image : 'no_img.jpeg'),
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
                this.imagePreview = e.target.result;
            };

            reader.readAsDataURL(file);
        },
    },
 }
</script>

