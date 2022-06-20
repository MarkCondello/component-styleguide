require('./bootstrap')
import Vue from "vue"
import WindowPal from "./lib/WindowPal.js"
import Tabs from "./lib/Tabs.js"
import SelectFilter from "./lib/SelectFilter.js"
import BaseTable from "./vue/components/UI/BaseTable"

import vClickOutside from "v-click-outside"
// import Icon from "./vue/components/UI/Icon.vue"
// import InputWrapper from "./vue/components/UI/InputWrapper.vue"
import Modal from "./vue/components/UI/ModalWrapper.vue"
import SidePanel from "./vue/components/UI/SidePanel.vue"
import SidePanelJobCreate from "./vue/styleguide/SidePanelJobCreate.vue"
import VTable from "./vue/components/UI/VTable.vue"
import VDatePicker from "./vue/components/UI/VDatePicker.vue"

import PlanetChart from "./vue/components/UI/PlanetChart.vue"

import MultiselectWrapper from '@dcodegroup-au/vue-multiselect/MultiselectWrapper.vue'
import DatepickerWrapper from '@dcodegroup-au/vue-datepicker/DatepickerWrapper.vue'

import DeleteModal from './vue/components/modals/DeleteModal.vue'
import DeleteModalTrigger from './vue/styleguide/DeleteModalTrigger.vue'
import JobPanelTrigger from './vue/styleguide/JobPanelTrigger.vue'
import CodeBlock from './vue/styleguide/CodeBlock.vue'

// Vue.component("Icon", Icon)
// Vue.component("InputWrapper", InputWrapper)
Vue.component("MultiselectWrapper", MultiselectWrapper)
Vue.component("DatepickerWrapper", DatepickerWrapper)
Vue.component("Modal", Modal)
Vue.component("DeleteModal", DeleteModal)
Vue.component("DeleteModalTrigger", DeleteModalTrigger)
Vue.component("VDatePicker", VDatePicker)

Vue.component("PlanetChart", PlanetChart)

Vue.component("VTable", VTable)
Vue.component("BaseTable", BaseTable)
Vue.component("SidePanel", SidePanel)
Vue.component("SidePanelJobCreate", SidePanelJobCreate)
Vue.component("JobPanelTrigger", JobPanelTrigger)
Vue.component('CodeBlock', CodeBlock)

window.onload = (event) => {
    window.pal = new WindowPal(window)
    let tabs = Array.from(document.querySelectorAll('nav.tabs'))
    if(tabs.length){
        tabs.forEach(tab => {
            new Tabs(tab)
        })
    }
    let selectFilters = Array.from(document.querySelectorAll('.select-filter-input'))
    if(selectFilters.length){
        selectFilters.forEach(selectFilter => {
            new SelectFilter(selectFilter)
        })
    }
    const asideUl = document.querySelector("#styleguide main > aside > ul, #demo-pages aside > ul")
    if (asideUl) {
        setTimeout(()=>{
            asideUl.style.opacity = 1
        }, 300)
        const asideLiEls = Array.from(asideUl.querySelectorAll('li'))
        if (asideLiEls.length) {
            asideLiEls.forEach(liEl => {
                const liUl = liEl.querySelector('ul')
                const liButton = liEl.querySelector('button')
                if (liUl && liButton) {
                    const dropdownHeight = liUl.offsetHeight
                    liEl.classList.add('has-children')
                    liUl.style.minHeight = 0
                    liUl.style.opacity = 0
                    liButton.addEventListener('click', function() {
                        liEl.classList.toggle('active')
                        if (liEl.classList.contains('active')) {
                            liUl.style.minHeight = dropdownHeight + 'px'
                            liUl.style.opacity = 1
                        } else {
                            liUl.style.minHeight = 0 + 'px'
                            liUl.style.opacity = 0
                        }
                    })
                    if (liEl.classList.contains('active')) {
                        liUl.style.minHeight = dropdownHeight + 'px'
                        liUl.style.opacity = 1
                    }
                }
            })
        }
    }
    window.toggleActive = function(el) {
        el.classList.toggle('active')
    }
    let menus = Array.from(document.querySelectorAll('.demo ul a, .demo ul button, nav ul li button'))
    if(menus.length) {
        menus.forEach(menu => {
            menu.addEventListener('click', function(ev){
                ev.preventDefault()
                if(menu.classList.contains('active')) {
                    window.pal.$clickoffElements = menus
                    window.pal.clickoffCallback = (
                        function(){
                            menus.forEach(item => {
                                item.classList.remove('active')
                            })
                            this.resetClickoff()
                        }
                    )
                }
            })
        })
    }
 }

Vue.use(vClickOutside)
new Vue({
    el: "#app",
    data() {
        return {
          csrf_token: document.head.querySelector('meta[name="csrf-token"]').content,
        }
      },
})
