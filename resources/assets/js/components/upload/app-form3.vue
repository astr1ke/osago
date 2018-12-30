<template>
    <div>
    <input @change="$emit('change1', true)" @input="$emit('input1', $event.target.value)" class="formInput" type="file" name="uploadFiles[]" id="form3UploadHiddenLeft" onchange="document.getElementById('Form3UploadVisibleDoneLeft').style.display = 'initial'; document.getElementById('Form3UploadVisibleIconLeft').style.display = 'none';" />
    <input @change="$emit('change2', true)" @input="$emit('input2', $event.target.value)" class="formInput" type="file" name="uploadFiles[]" id="form3UploadHiddenRight" onchange="document.getElementById('Form3UploadVisibleDoneRight').style.display = 'initial'; document.getElementById('Form3UploadVisibleIconRight').style.display = 'none';" />

    <button class="formButtonLeft" onclick="document.getElementById('form3UploadHiddenLeft').click()">Главная страница</button>
    <img class="formIconLeft" :src="icon" id="Form3UploadVisibleIconLeft">
    <img class="formDoneLeft" :src="done" id="Form3UploadVisibleDoneLeft">

    <button class="formButtonRight" onclick="document.getElementById('form3UploadHiddenRight').click()">Обратная сторона</button>
    <img class="formIconRight" :src="icon" id="Form3UploadVisibleIconRight">
    <img class="formDoneRight" :src="done" id="Form3UploadVisibleDoneRight">

    <input type="text" name="form3more" id="more" hidden>' +
    <button class="addDriver" type="submit" onclick="document.getElementById('form3more').value = '1'">Добавить еще водителя</button>
    <button class="doneButton" @click="this.$parent.nextPage" type="submit">Закончить отправку</button>
    </div>
</template>

<script>
    export default {
        props: ['icon', 'done']
    }
</script>

