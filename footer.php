
<footer>
    <section id="footer-main" class="bg-secondary text-white">
        <div class="container mx-auto p-6 grid pt-24 grid-cols-1 md:grid-cols-4 gap-4">
<div class="foot-col col-span-1 md:col-span-4 lg:col-span-1 md:pt-32" style="padding-top:4rem;">
                <img id="logo" class="h-[4rem] mb-4" src="https://fonds1819.sitework.link/wp-content/uploads/2024/10/footerlogo.png" width="100%" border="0" alt="Naar de home page" />
            </div>
            <div class="foot-col col-span-1 md:col-span-4 lg:col-span-1">
                <?php the_field('footer_kolom_1', 'option'); ?>
            </div>
            <div class="foot-col col-span-1 md:col-span-4 lg:col-span-1">
                <?php the_field('footer_kolom_2', 'option'); ?>
            </div>
            <div class="foot-col col-span-1 md:col-span-4 lg:col-span-1">
                <?php the_field('footer_kolom_3', 'option'); ?>
            </div>
        </div>
    </section>
	<section id="subFooter" class="bg-white">
    <div class="container mx-auto py-4 flex  flex-col md:flex-row md:justify-between md:items-center text-black" style="font-family: poppins; " > 
        <div class="left flex items-center  justify-center md:justify-start">
            <span class="text-center md:text-left">&copy; <?=date('Y');?>, Fonds 1819</span>
            <span class="hidden md:inline  md:ml-4">Disclaimer</span>
            <span class="hidden md:inline md:ml-4">Privacyverklaring</span>
        </div>
        <div id="sitework" class="flex items-center justify-center mt-4 md:mt-0">
            <a href="https://sitework.nl" target="_blank" class="flex items-center mr-2">
                <span class="text-black font-bold hidden md:block">Sitework</span>
                <svg class="ml-2" width="32" height="33" viewBox="0 0 32 33" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M30.1731 24.0334C31.3398 21.8129 32 19.2845 32 16.602C32 7.76572 24.8366 0.602051 16.0008 0.602051C7.16179 0.602051 0 7.76572 0 16.602C0 25.4384 7.16179 32.6021 16.0008 32.6021C18.6829 32.6021 21.211 31.9419 23.4314 30.7753C24.3104 31.888 25.6717 32.6021 27.2002 32.6021C29.851 32.6021 32 30.4529 32 27.8021C32 26.2739 31.2859 24.9125 30.1731 24.0334ZM30.4 27.8021C30.4 29.5693 28.9673 31.0021 27.2001 31.0021C25.4324 31.0021 24 29.5693 24 27.8021C24 26.0348 25.4324 24.6021 27.2001 24.6021C28.9673 24.6021 30.4 26.0348 30.4 27.8021ZM17.6335 11.2711C18.1107 11.6015 18.4411 12.0787 18.4779 12.7028H25.086C24.9025 7.82054 19.9463 6.68205 15.835 6.68205C12.017 6.68205 6.84055 7.93068 6.84055 12.7395C6.84055 16.0069 9.07998 17.7695 14.6231 18.7236C18.0006 19.311 18.6247 19.6414 18.6247 20.7428C18.6247 21.8445 17.1195 22.2112 16.1654 22.2112C15.2839 22.2112 14.5864 21.9914 14.2193 21.661C13.669 21.1837 13.3753 20.633 13.3386 19.9722H6.4C6.51014 24.8912 11.4291 26.6905 15.908 26.6905C20.5337 26.6905 25.6 25.2588 25.6 19.9722C25.6 16.8513 23.4707 15.4199 21.0477 14.649C19.7643 14.2212 18.3882 13.9787 17.1977 13.7688C16.1406 13.5825 15.2298 13.422 14.6602 13.1805C14.256 12.9969 13.8158 12.7395 13.8158 12.1889C13.8158 10.9406 14.9906 10.7204 16.0182 10.7204C16.6055 10.7204 17.1929 10.9039 17.6335 11.2711Z" fill="black"/>
                </svg>
            </a>
            <a href="https://achterhoekhosting.com/" target="_blank" class="flex items-center ml-2">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="black" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5933 16.7099C16.5394 16.4828 17.2774 16.2368 17.8072 15.9719V17.3911C17.8072 18.4507 17.5045 19.2833 16.899 19.8888C16.2934 20.4944 15.4609 20.7971 14.4012 20.7971C13.7578 20.7971 13.2659 20.6457 12.9253 20.343C12.5847 20.0024 12.4144 19.5482 12.4144 18.9806C12.4144 18.5643 12.5468 18.148 12.8117 17.7317C13.1145 17.4289 13.6065 17.1829 14.2877 16.9937L15.5933 16.7099Z" fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16ZM26.237 21.2675C26.237 22.414 25.3075 23.3435 24.161 23.3435C23.0144 23.3435 22.0849 22.414 22.0849 21.2675C22.0849 20.1209 23.0144 19.1914 24.161 19.1914C25.3075 19.1914 26.237 20.1209 26.237 21.2675ZM16.161 23.6922C17.0693 23.6166 17.9208 23.3706 18.7155 22.9543C19.4724 22.5758 20.1158 21.9703 20.6456 21.1377C21.2133 20.2673 21.4971 19.0752 21.4971 17.5614V12.3956C21.4971 11.0332 20.9484 9.97349 19.8509 9.2166C18.7912 8.49755 17.2017 8.13802 15.0824 8.13802C13.1902 8.13802 11.7331 8.57324 10.7113 9.44367C9.80306 10.2006 9.27323 11.1656 9.12185 12.3388H12.9253C13.1145 11.9225 13.4172 11.6387 13.8335 11.4873C14.2498 11.3359 14.7229 11.2602 15.2527 11.2602C15.7447 11.2602 16.2745 11.3548 16.8422 11.5441C17.4477 11.6954 17.7505 12.055 17.7505 12.6226C17.7505 13.3795 16.9179 13.8715 15.2527 14.0986C14.9121 14.1364 14.6094 14.1576 14.3349 14.1576H13.9461V15.0347C13.9461 15.6655 14.4371 16.161 15.2527 16.161C16.1063 16.161 16.9056 15.7358 17.2487 15.2064C17.5854 14.6834 17.8104 13.8042 17.8104 12.3956V19.1914C17.8104 19.7817 17.5767 20.2389 17.1321 20.738C16.6153 21.3076 15.7991 21.7092 14.9151 21.8935C14.0057 22.0869 13.1863 22.1592 12.3742 22.1592C11.5251 22.1592 10.7761 22.0447 10.1269 21.8537C9.58363 21.6841 9.09074 21.2782 8.91641 20.8906C8.76142 20.5389 8.77735 20.0552 8.84079 19.4781C8.94451 18.4474 9.18932 17.4886 9.65701 16.7581C10.0635 16.1695 10.556 15.8243 11.1463 15.6417C11.7568 15.4638 12.6988 15.5725 13.8335 15.8983C14.9275 16.219 15.5811 16.4778 16.161 16.5156V23.6922Z" fill="black"/>
                </svg>
            </a>
        </div>
    </div>
</section>

</footer>

<?php wp_footer(); ?>

<button type="button" title="scroll naar het begin van de pagina" class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</button>

</body>
</html>
