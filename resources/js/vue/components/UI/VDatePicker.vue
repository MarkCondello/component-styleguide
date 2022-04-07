<template>
  <div class="datepicker-wrapper">
    <input
        v-if="isFormInput"
        :id="name"
        type="hidden"
        :name="name"
        :value="formattedDate"
    > 
    <date-picker
        :ref="name"
        v-model="date"
        value-type="format"
        :disabled="isDisabled"
        :format="format"
        :range="isRange"
        :type="type"
        :clearable="isClearable"
        :placeholder="placeholder"
        :input-attr="{
            name: '',
        }"
        @change="$emit('input', { formattedDate, name, date })"
    />
    <!-- the name attr was added because by default its name is 'date' which conflicts with other fields -->
  </div>
</template>

<script>
    import DatePicker from 'vue2-datepicker';
    export default {
        name: 'datepickerWrapper',
        components: {DatePicker},
        props: {
            isFormInput: {
                type: Boolean,
                default: false,
            },
            name: {
                type: String,
                default(rawProps) {
                    return this.isFormInput ? 'date' : null
                },
            },
            isRange: {
                type: Boolean,
                default: false,
            },
            value: {
                type: String | Array,
                default: null,
            },
            isClearable: {
                type: Boolean,
                default: true,
            },
            isDisabled: {
                type: Boolean,
                default: false,
            },
            placeholder: {
                type: String,
                default: null,
            }
        },
        data() {
            return {
                format: 'DD/MM/YYYY',
                type: 'date',
                date: this.value,
            }
        },
        created() { // convert the iso date value prop to the format required
            if (this.date) {
                if (this.isRange) {
                    const dateStartPieces = this.splitDate(this.date[0], '-')
                    this.date[0] = `${dateStartPieces[2]}/${dateStartPieces[1]}/${dateStartPieces[0]}`
                    const dateEndPieces = this.splitDate(this.date[1], '-')
                    this.date[1] = `${dateEndPieces[2]}/${dateEndPieces[1]}/${dateEndPieces[0]}`
                return
                }
                const datePieces = this.splitDate(this.date, '-')
                this.date = `${datePieces[2]}/${datePieces[1]}/${datePieces[0]}`
            }
        },
        methods: {
            splitDate(value, character = '/') {
                value = value.includes('T') ? value.split('T')[0] : value
                value = value.includes(' ') ? value.split(' ')[0] : value
                return value.split(character)
            },
            isoToDate(value) { //value needs to be yyyy-mm-dd to be converted to a Date
                const datePieces = this.splitDate(value)
                return `${datePieces[2]}-${datePieces[1]}-${datePieces[0]}`
            },
            dateToIso(date) { // convert the value to iso to save in the backend
                return (date instanceof Date)
                    ? `${date.getFullYear()}-${this.padZero(date.getMonth() + 1)}-${this.padZero(date.getDate())}`
                    : null
            },
            padZero(n) {
                return n < 10 ? `0${n}` : n
            },
        },
        computed: {
            formattedDate() {
                if (Array.isArray(this.date) && this.isRange && this.date[0] && this.date[1]) { //date is an array and array items have date values
                    //need to convert formattedDate from Y-m-d to d/m/Y 
                    const dateStart = new Date(this.isoToDate(this.date[0]))
                    const dateEnd =  new Date(this.isoToDate(this.date[1]))
                    return [this.dateToIso(dateStart), this.dateToIso(dateEnd)]
                } else if (Array.isArray(this.date) && this.isRange && this.date[0] === null && this.date[1] === null) {  // when clearing dates, set the formattedDate array values to null
                    return [null, null]
                } else if (this.date && this.isRange === false && Array.isArray(this.date) === false) {
                     //need to convert formattedDate from Y-m-d to d/m/Y 
                    return this.dateToIso(new Date(this.isoToDate(this.date)))
                } else { // when clearing dates, set the formattedDate value to null
                    return null
                }
            },
        },
    }
</script>
<!-- Ensure that the preset table styles are not affecting the date calendar table -->
