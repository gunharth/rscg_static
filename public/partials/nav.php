<div class="fixed top-0 right-0 m-2 p-3 text-sm font-mono text-white h-6 w-6 rounded-full flex items-center justify-center bg-gray-700 sm:bg-pink-500 md:bg-orange-500 lg:bg-green-500 xl:bg-blue-500 z-50">
    <div class="block sm:hidden md:hidden lg:hidden xl:hidden">all</div>
    <div class="hidden sm:block  md:hidden lg:hidden xl:hidden">sm</div>
    <div class="hidden sm:hidden md:block  lg:hidden xl:hidden">md</div>
    <div class="hidden sm:hidden md:hidden lg:block  xl:hidden">lg</div>
    <div class="hidden sm:hidden md:hidden lg:hidden xl:block">xl</div>
    <!--         <div class="hidden sm:hidden md:hidden lg:hidden xl:hidden 2xl:block 3xl:hidden">2xl</div>
        <div class="hidden sm:hidden md:hidden lg:hidden xl:hidden 2xl:hidden 3xl:block">3xl</div> -->
</div>

<nav class="fixed z-40 w-full bg-wedl-red">
    <div class="relative">
        <div class="flex">
            <div class="w-2 lg:grow h-[62px] xl:h-[77px] border-b-[1px]"></div>
            <div class="flex lg:container xl:max-w-screen-lg">
                <a class="" href="/">
                    <?php include('svg/logo.svg'); ?>
                </a>
                <div class="grow h-[62px] xl:h-[77px] border-b-[1px] flex text-sm md:text-base">
                    <ul class="nav-main flex responsive-px text-white mt-5 xl:mt-8">
                        <li class="hidden md:flex"><a href="/">Home</a></li>
                        <li class="flex"><a href="/">LL-Opening</a></li>
                        <li class="flex <?php if ($nav == "verleih") {
                                            print 'active';
                                        } ?>"><a href="verleih.php">Verleih</a></li>
                        <li id="toggle-mobile-nav" class="flex md:hidden"><a href="#">mehr...</a></li>
                        <li class="hidden md:flex"><a href="/">Skiwerkstatt</a></li>
                        <li class="hidden md:flex"><a href="/">Über Uns</a></li>
                        <li class="hidden md:flex"><a href="/">Kontakt</a></li>
                    </ul>
                </div>
            </div>
            <div class="grow h-[62px] xl:h-[77px] border-b-[1px]"></div>
        </div>
        <!-- mobile menu -->
        <div class="mobile-menu absolute h-0 overflow-hidden w-full bg-wedl-red">
            <ul class="flex flex-col text-white py-4">
                <li><a href="/">Skiwerkstatt</a></li>
                <li><a href="/">Über Uns</a></li>
                <li><a href="/">Kontakt</a></li>
                <li><a href="/">Impressum</a></li>
                <li><a href="/">Datenschutzerklärung</a></li>
            </ul>
        </div>
    </div>

</nav>
<div class="nav-spacing"></div>
