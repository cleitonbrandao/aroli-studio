import './bootstrap';
import 'flowbite';

import Datepicker from 'flowbite-datepicker/Datepicker';

const datepickerEl = document.getElementById('datepicker');
new Datepicker(datepickerEl, {
    format: 'dd-mm-yyyy'
});
