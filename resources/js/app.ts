import './bootstrap';
import { createApp } from 'vue';
import Dropdown from "@/components/Dropdown/Dropdown.vue";

const app = createApp({});

app.component('Dropdown', Dropdown);

app.mount('#app');
