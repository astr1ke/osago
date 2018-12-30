<template>
    <div>
    <input @change="$emit('change1', true)" @input="$emit('input1', $event.target.value)" class="formInput" type="file" name="form5upload1" id="form5UploadHiddenLeft" onchange="document.getElementById('Form5UploadVisibleDoneLeft').style.display = 'initial'; document.getElementById('Form5UploadVisibleIconLeft').style.display = 'none';" />
    <input @change="$emit('change2', true)" @input="$emit('input2', $event.target.value)" class="formInput" type="file" name="form5upload2" id="form5UploadHiddenRight" onchange="document.getElementById('Form5UploadVisibleDoneRight').style.display = 'initial'; document.getElementById('Form5UploadVisibleIconRight').style.display = 'none';" />
    <input @change="$emit('change3', true)" @input="$emit('input3', $event.target.value)" class="formInput" type="file" name="form5upload3" id="form5UploadHiddenCenter" onchange="document.getElementById('Form5UploadVisibleDoneCenter').style.display = 'initial'; document.getElementById('Form5UploadVisibleIconCenter').style.display = 'none';" />

    <button class="formButtonRight" onclick="document.getElementById('form5UploadHiddenLeft').click()">ПТС 1 сторона</button>
    <img class="formIconLeft" :src="icon" id="Form5UploadVisibleIconLeft">
    <img class="formDoneLeft" :src="done" id="Form5UploadVisibleDoneLeft">

    <button class="formButtonRight" onclick="document.getElementById('form5UploadHiddenRight').click()">ПТС 2 сторона</button>
    <img class="formIconRight" :src="icon" id="Form5UploadVisibleIconRight">
    <img class="formDoneRight" :src="done" id="Form5UploadVisibleDoneRight">

    <button class="addDKP" onclick="document.getElementById('form5UploadHiddenCenter').click()">Договор КП</button>
    <img class="formIconCenter" :src="icon" id="Form5UploadVisibleIconCenter">
    <img class="formDoneCenter" :src="done" id="Form5UploadVisibleDoneCenter">
    </div>
</template>

<script>
    export default {
        props: ['icon', 'done']
    }
</script>

<style scoped>

</style>