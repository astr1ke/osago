<template>
    <div>
        <input @change="$emit('change1', true)" @input="$emit('input1', $event.target.value)" class="formInput"  type="file" name="uploadFiles[]" id="form1UploadHiddenLeft" onchange="document.getElementById('Form1UploadVisibleDoneLeft').style.display = 'initial'; document.getElementById('Form1UploadVisibleIconLeft').style.display = 'none';" />
        <input @change="$emit('change2', true)" @input="$emit('input2', $event.target.value)" class="formInput"  type="file" name="uploadFiles[]" id="form1UploadHiddenRight" onchange="document.getElementById('Form1UploadVisibleDoneRight').style.display = 'initial'; document.getElementById('Form1UploadVisibleIconRight').style.display = 'none';" />

        <button class="formButtonLeft" onclick="document.getElementById('form1UploadHiddenLeft').click()">Главная страница</button>
        <img class="formIconLeft" :src="icon" id="Form1UploadVisibleIconLeft">
        <img class="formDoneLeft" :src="done" id="Form1UploadVisibleDoneLeft">

        <button class="formButtonRight" onclick="document.getElementById('form1UploadHiddenRight').click()">Прописка</button>
        <img class="formIconRight" :src="icon" id="Form1UploadVisibleIconRight">
        <img class="formDoneRight" :src="done" id="Form1UploadVisibleDoneRight">
    </div>
</template>

<script>
    export default {
        props: ['icon', 'done']
    }
</script>


<style>
    .formButtonLeft {
        max-width: 258px !important;
        margin-right: 10px !important;
    }
    .formButtonRight {
        max-width: 258px !important;
        margin-right: 10px !important;
    }
    .formIconLeft {
        display: initial;
        height: 30px;
        width: 30px;
        margin-right: 17px
    }
    .formDoneLeft {
        display: none;
        height: 30px;
        width: 30px;
        margin-right: 17px
    }
    .formIconRight {
        display: initial;
        height: 30px;
        width: 30px
    }
    .formDoneRight {
        display: none;
        height: 30px;
        width: 30px
    }
</style>