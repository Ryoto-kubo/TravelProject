<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }

    export default {
    data() {
        return {
            isDrag: null
        }
    },
    methods: {
        checkDrag(event, key, status){ //★④
            if (status && event.dataTransfer.types == "text/plain") {
                //ファイルではなく、html要素をドラッグしてきた時は処理を中止
                return false
            }
            this.isDrag = status ? key : null
        },
    }
};

</script>
