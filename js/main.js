/**
 * The file contains JavaScript code for the portfolio project.
 *
 * @category   Web_Development_<regina.salikhova93@gmail.com>
 * @link       https://github.com/ReginaBorisova/portfolio
 * @package    Portfolio
 * @subpackage WorkVariables
 * @author     Regina_Borisova <regina.salikhova93@gmail.com>
 * @license    https://account.jetbrains.com/licenses PHPStorm
 *
 * @version CVS: <cvs_id>
 */
/* Select DOM Items I want overlay */
const menuBtn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu');
const menuNav = document.querySelector('.menu-nav');
const menuBranding = document.querySelector('.menu-branding');

const navItems = document.querySelectorAll('.nav-item');

/* Set initial State Of Menu */
let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu() {
    if (!showMenu) {
        menuBtn.classList.add('close');
        menu.classList.add('show');
        menuNav.classList.add('show');
        menuBranding.classList.add('show');
        navItems.forEach(item => item.classList.add('show'));

        /* Set Menu State */
        showMenu = true;
    } else {
        menuBtn.classList.remove('close');
        menu.classList.remove('show');
        menuNav.classList.remove('show');
        menuBranding.classList.remove('show');
        navItems.forEach(item => item.classList.remove('show'));

        /* Set Menu State */
        showMenu = false;
    }
}