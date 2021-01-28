<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David Adams</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body class="bg-brand-black font-body font-normal">
    <div class="max-w-4xl mx-auto px-6">
        <header class="mb-32"> <!--header start-->
           <?php include("navbar.php") ?>
            <div class="flex items-center mt-32">
                <div class="w-1/2">
                    <div>
                        <img src="img/hi.png" alt="Hi Image">
                    </div>
                    <div class="text-sm">
                        <p class="pb-4 text-gray-400">My name is Adams David and I am a UI/UX Designer.</p>
                        <div class="pb-4 mb-8 tracking-wider text-white">
                        Over 3+ years of hands-on experience on UI/UX design and Interaction design expertise. I employ my creative, technical, and analytical prowess to craft unique ideas that delight users, tell compelling stories, and help drive business growth.
                        </div>
                        <div class="">
                            <button class="bg-brand-orange rounded-full mr-8 px-8 py-2 text-white"><a href="contact.php">Get in Touch</a></button>
                            <button class="bg-transparent text-white border-b border-brand-orange"><a href="adamsdavid-cv.pdf">Download resume</a></button>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 flex justify-end">
                    <img class="" src="img/man.png" alt="Man waving">
                </div>
            </div>
        </header> <!--header-end-->
        <main>
            <section class="">
                <div class="mb-16">
                    <h2 class="text-center text-lg text-white mb-1">Projects</h2>
                    <div class="w-20 m-auto border-t-2 border-brand-orange mb-5"></div>
                    <p class="text-center text-sm text-white">Here are some projects I had worked on for some clients</p>
                </div>
                <div class="flex mb-12">
                    <div class="w-1/2 bg-brand-pink flex items-center justify-center">
                        <img src="img/shoplift.png" alt="My Tudo">
                    </div>
                    <div class="w-1/2 bg-brand-blue-dark">
                        <div class="py-16 m-auto text-white w-3/4">
                            <h3 class="pb-16 text-sm font-normal font-body">WEB APP</h3>
                            <h2 class="pb-16 text-3xl font-bold font-titleMain">SHOPLIFT</h2>
                            <p class="pb-16 text-sm font-medium font-body">Building a consistent web expeirence on shoplift platform</p>
                            <button class="rounded-full bg-brand-orange px-12 py-3">View case study</button>
                        </div>
                    </div>
                </div>
                <div class="flex mb-12">
                    <div class="w-1/2 bg-brand-red">
                        <div class="py-16 m-auto text-white w-3/4">
                            <h3 class="pb-16 text-sm font-normal font-bodyl">WEB APP</h3>
                            <h2 class="pb-16 text-3xl font-bold font-titleSub">EventR</h2>
                            <p class="pb-16 text-sm font-medium font-body">Improving the online Event Platform experience and interaction between hosts and online audience.</p>
                            <button class="rounded-full bg-brand-orange px-12 py-3">View case study</button>
                        </div>
                    </div>
                    <div class="w-1/2 bg-brand-pink flex items-center justify-center">
                        <img src="img/eventr.png" alt="My Tudo">
                    </div>
                </div>
                <div class="flex mb-12">
                    <div class="w-1/2 bg-brand-pink flex items-center justify-center">
                        <img src="img/maakandco.png" alt="My Tudo">
                    </div>
                    <div class="w-1/2 bg-brand-gray-light">
                        <div class="py-16 m-auto text-white w-3/4">
                            <h3 class="pb-16 text-sm font-normal font-body">WEB APP</h3>
                            <h2 class="pb-16 text-3xl font-bold font-titleMain">Maakandco</h2>
                            <p class="pb-16 text-sm font-medium font-body">Redesigned how people find and book appointment for Beauty treatment</p>
                            <button class="rounded-full bg-brand-orange px-12 py-3">View case study</button>
                        </div>
                    </div>
                </div>
                <div class="flex mb-24">
                    <div class="w-1/2 bg-brand-blue-light">
                        <div class="py-16 m-auto text-white w-3/4">
                            <h3 class="pb-16 text-sm font-normal font-body">MOBILE APP</h3>
                            <h2 class="pb-16 text-3xl font-bold font-titleSub">my Tudo</h2>
                            <p class="pb-16 text-sm font-medium font-body">Working in a multidisciplinary team to design a tool to help people smash their goals</p>
                            <button class="rounded-full bg-brand-orange px-12 py-3">View case study</button>
                        </div>
                    </div>
                    <div class="w-1/2 bg-brand-pink flex items-center justify-center">
                        <img src="img/tudo.png" alt="My Tudo">
                    </div>
                </div>
                <div class="flex justify-center mb-24">
                    <button class=" border border-brand-orange rounded-full py-2 px-10 text-white">more projects</button>
                </div>
            </section>
        </main>
        <?php include("footer.php") ?>
    </div>

    <script src="index.js"></script>
</body>
</html>