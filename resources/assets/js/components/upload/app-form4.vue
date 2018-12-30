<template>
    <div>
        <input @input="$emit('input1', $event.target.value)" class="inputNumber" type="text" name="number" placeholder="Номер телефона для связи..."/>
        <input @input="$emit('input2', $event.target.value)" class="inputComment" type="text" name="comment" placeholder="Так же можете оставить коментарий"/>

        <br>
        <input type="text" name="form4more" id="more" hidden>
        <label>Для вновь купленных автомобилей необходимы дополнительные документы:</label>

        <button class="addInfo" @click="this.$parent.nextPage" type="submit" onclick="document.getElementById('more').value = '1'">Доп. документы</button>
        <button @click="$emit('submit-button')" class="doneButton" type="submit">Сохранить и вернуться</button>
    </div>
</template>

<script>
    export default {
        props: ['icon', 'done']
    }
</script>

