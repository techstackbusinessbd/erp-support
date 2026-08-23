import $ from 'jquery';
window.$ = window.jQuery = $;

import toastr from 'toastr';
window.toastr = toastr;

import Swal from 'sweetalert2';
window.Swal = Swal;

import 'bootstrap';
import 'admin-lte';
import 'overlayscrollbars/overlayscrollbars.css'; // Sometimes needed inside js or handled by css
import { OverlayScrollbars } from 'overlayscrollbars';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// Initialize OverlayScrollbars
document.addEventListener("DOMContentLoaded", function() {
    const sidebarWrapper = document.querySelector(".sidebar-wrapper");
    if (sidebarWrapper && typeof OverlayScrollbars !== "undefined") {
        OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
                theme: "os-theme-light",
                autoHide: "leave",
                clickScroll: true,
            },
        });
    }
});
