<template>
    <div>
    <input @change="$emit('change1', true)" @input="$emit('input1', $event.target.value)" class="formInput" type="file" name="form2upload1" id="form2UploadHiddenLeft" onchange="document.getElementById('Form2UploadVisibleDoneLeft').style.display = 'initial'; document.getElementById('Form2UploadVisibleIconLeft').style.display = 'none';" />
    <input @change="$emit('change2', true)" @input="$emit('input2', $event.target.value)" class="formInput" type="file" name="form2upload2" id="form2UploadHiddenRight" onchange="document.getElementById('Form2UploadVisibleDoneRight').style.display = 'initial'; document.getElementById('Form2UploadVisibleIconRight').style.display = 'none';" />

    <button class="formButtonLeft" onclick="document.getElementById('form2UploadHiddenLeft').click()">Главная страница</button>
    <img class="formIconLeft" :src="icon" id="Form2UploadVisibleIconLeft">
    <img class="formDoneLeft" :src="done" id="Form2UploadVisibleDoneLeft">

    <button class="formButtonRight" onclick="document.getElementById('form2UploadHiddenRight').click()">Обратная сторона</button>
    <img class="formIconRight" :src="icon" id="Form2UploadVisibleIconRight">
    <img class="formDoneRight" :src="done" id="Form2UploadVisibleDoneRight">
    </div>
</template>

<script>
    export default {
        props: ['icon', 'done']
    }
</script>

