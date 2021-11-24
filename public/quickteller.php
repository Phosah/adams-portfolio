<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div class="bg-red-200">
        <?php include 'navbar.php' ?>
    </div>
    <header class="flex items-center py-20 bg-red-200">
        <div>
            <p>Landing page multi-channel payments platform</p>
            <p>Web UI Design</p>
            <h2>Improving</h2>
            <h1>Quickteller.com</h1>
            <h2>UX Case Study</h2>
            <p>Customer convienient platform for online transactions and bill payments</p>
            <p>Improving quickteller</p>
        </div>
        <div class="flex">
            <div><img src="img/quick-1.png" alt="Quickteller payment"></div>
            <div><img src="img/quick-2.png" alt="Quickteller payment"></div>
        </div>
    </header>
    <main class="py-20">
        <section class="flex space-x-12">
            <div>
                <div>
                    <h3>My Role</h3>
                    <p>UX Researcher</p>
                    <p>UI Designer</p>
                </div>
                <div>
                    <h3>Type</h3>
                    <p>Project</p>
                </div>
                <div>
                    <h3>Duration</h3>
                    <p>3 weeks</p>
                </div>
            </div>
            <div>
                <h2 class="border-b border-brand-orange">Introduction</h2>
                <p>Quickteller is one of those quick access transfer money platform for transactions and others; but
                    accessed by few after user have exhasted other options (Banking app). Not to take away the
                    efficiency of what it generate and how easy it feels to use after completing transaction by
                    navigating too many proc esses on the landing page which basically looks like a search box.</p>
                <p>Hence, the need to provide and improved and efficient look to give users the satisfaction and
                    swiftness in making their day-to-day transaction which in-turn will generate more revenue.</p>
                <p>I use quickteller. A lot. To send money, to buy airtime and to pay for my internet plan. Before the
                    quickteller interface redesign, it was hard to admire the interface. I wanted to logout as quickly
                    as I logged in. But after the interface redesign, it was easier to look at. I’ve always wanted to
                    use Quickteller as a case study. Today I have. I did a research to improve Quickteller’s landing
                    page and overall UX. </p>
            </div>
        </section>
        <section class="py-20">
            <h2>Design Process</h2>
            <div class="flex">
                <div>
                    <div class="flex items-center justify-center w-20 h-20 rounded-full bg-red-300 text-white">Observe
                    </div>
                    <p>Problem Assumption</p>
                </div>
                <div>
                    <div class="flex items-center justify-center w-20 h-20 rounded-full bg-red-300 text-white">Define
                    </div>
                    <p>Pain Points</p>
                </div>
                <div>
                    <div class="flex items-center justify-center w-20 h-20 rounded-full bg-red-300 text-white">Ideate
                    </div>
                    <p>Paper Sketch</p>
                </div>
                <div>
                    <div class="flex items-center justify-center w-20 h-20 rounded-full bg-red-300 text-white">Prototype
                    </div>
                    <p>UI Design</p>
                </div>
                <div>
                    <div class="flex items-center justify-center w-20 h-20 rounded-full bg-red-300 text-white">Validate
                    </div>
                    <p>Usability Testing</p>
                </div>
                <div>
                    <div class="flex items-center justify-center w-20 h-20 rounded-full bg-red-300 text-white">Observe
                    </div>
                    <p>Problem Assumption</p>
                </div>
            </div>
        </section>
        <section class="py-20">
            <h2 class="border-b border-brand-orange">Observe</h2>
            <h3>Problem Assumption:</h3>
            <ul class="list-inside">
                <li>Platform features is not clear enough.</li>
                <li>The use of the images in the background give the platform an outdated look</li>
                <li>There is no indication on the landing page that the platofrm has a mobile application</li>
            </ul>
            <p>Seeing as more people use mobile devices to perform such tasks, there ought to be an indication od a
                mobile application on be downloaded using either iOs/Android.</p>
            <h2>User Persona:</h2>
            <p>I interviewed some friends of mine who use the platform regularly. I asked them if "they knew about all
                the features of the platform?", "what do they think about the interface redesign?", "do they know that
                there was a mobile application available?", "What they thought about the background images". 2/4 people
                I spoke to said they were not aware Quickteller had a "Loan Request" feature. 1 of them were satisfied
                with the interface redesign while the other 1 felt the overall experience could be better. 2 of them
                said that the there felt that the background images were a mismatch for the type of services that the
                platform offers. 1 of them were aware that the platform has a mobile application</p>
        </section>
        <section class="py-20">
            <h2 class="border-b border-brand-orange">Define</h2>
            <h3>Having validated the assumptions</h3>
            <p>Pain point 1: The features (Discoverability)</p>
            <h3>User want to see all the features of the platform at a glance</h3>
            <p>Pain point 2: Redundant features</p>
            <h3>The vendor user research bar is redundant because they could perform the same task from the "Pay Bills"
                section.</h3>
            <p>Pain point 3: Mismatched background images</p>
            <h3>Users want to see the platform have a more modern look and feel.</h3>
            <div><img src="img/quickteller.png" alt="Quickteller home page"></div>
        </section>
        <section class="py-20">
            <h2 class="border-b border-brand-orange">Ideate</h2>
            <p>To solve the user problems, sketched out some possible solutions on paper.</p>
            <div><img src="img/ideate.png" alt="Ideate"></div>
        </section>
        <section class="py-20">
            <h2 class="border-b border-brand-orange">Prototyping</h2>
            <p>User Interface Design.</p>
            <div class="mb-6"><img src="img/prototype-1.png" alt="Prototype"></div>
            <div><img src="img/prototype-2.png" alt="Prototype"></div>
            <div>
                <h3>Pain points 1,2,3 addressed</h3>
                <ul>
                    <li>Take out the side menu and use cards.</li>
                    <li>Each feature on the platform is represented as a card</li>
                    <li>Add section indication that there is a mobile application available</li>
                    <li>Changed the main background image to give the platform a more modern look.</li>
                </ul>
                <h3>Validate:</h3>
                <p>To make sure that the redesigned interface addressed the pain points. I interviewed a few users. One
                    of them had this to say:</p>
                <p>"At a glance, one can see what the product is all about and can quickly interact with various
                    features by toggling. The redesigned retains the simplicity of the original design while increasing
                    the overall “WOW’ factor of the application."</p>
                <p>**Disclamier: I do not work for interswitch group nor am I affiliated with them. I did this UX case
                    study to improve my problem solving skills.</p>
            </div>
        </section>
        <h2>Thank you for your time</h2>
        <section>
            <div class="flex">
                <div>
                    <h2>NEXT PROJECT</h2>
                    <div class="flex">
                        <h2>EventR</h2>
                        <i>Arrow</i>
                    </div>
                    <h2>VIEW ALL</h2>
                </div>
                <div><img src="img/eventr.png" alt="Event R"></div>
            </div>
        </section>
    </main>
    <?php include 'footer.php' ?>
</body>

</html>