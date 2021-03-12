<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gray-100 flex flex-col justify-center">

<section class="relative py-3 px-2">
    <article class="max-w-full sm:max-w-2xl sm:mx-auto">
        <div class="relative bg-white shadow-lg rounded sm:rounded-md p-4 sm:p-6 lg:p-8 space-y-4">
            <header class="flex flex-row items-center space-x-2">
                <div>
                    <!-- twitter.user.avatar -->
                    <img src="/assets/logo.png" class="h-12 sm:h-16 w-12 sm:w-16" alt=" avatar">
                </div>
                <div class="flex-grow">
                    <div class="flex flex-row space-x-2">
                        <!-- twitter.user.name -->
                        <div class="text-xl text-gray-600 font-bold tracking-wide">Larabelles</div>
                        <!-- twitter.user.handle -->
                        <div class="text-gray-400">@LarabellesPHP</div>
                    </div>
                    <!-- tweet.date -->
                    <div class="text-sm text-gray-400">8:39 AM - Feb 12, 2021</div>
                </div>
                <div>
                    <!-- tweet.url -->
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                             width="289.984" height="289.984" viewBox="0 0 289.984 289.984" xml:space="preserve" class="h-4 sm:h-6">
<desc>Created with Fabric.js 1.7.22</desc>
                            <defs>
                            </defs>
                            <g id="icon"
                               style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                               transform="translate(-1.611022222222232 -1.611022222222232) scale(3.22 3.22)">
                                <path d="M 28.303 81.565 c 33.962 0 52.538 -28.138 52.538 -52.538 c 0 -0.799 0 -1.595 -0.054 -2.387 c 3.614 -2.614 6.733 -5.85 9.212 -9.558 c -3.37 1.493 -6.945 2.473 -10.606 2.905 c 3.855 -2.308 6.74 -5.937 8.118 -10.213 c -3.625 2.151 -7.59 3.667 -11.725 4.482 c -6.993 -7.436 -18.69 -7.795 -26.126 -0.802 c -4.796 4.51 -6.83 11.23 -5.342 17.643 C 29.473 30.352 15.64 23.34 6.264 11.804 c -4.901 8.437 -2.398 19.231 5.717 24.649 c -2.939 -0.087 -5.813 -0.88 -8.381 -2.311 c 0 0.076 0 0.155 0 0.234 c 0.002 8.79 6.198 16.36 14.814 18.101 c -2.718 0.741 -5.571 0.85 -8.338 0.317 c 2.419 7.522 9.351 12.675 17.251 12.823 c -6.539 5.139 -14.616 7.928 -22.932 7.92 C 2.926 73.534 1.459 73.445 0 73.27 c 8.444 5.419 18.27 8.293 28.303 8.28"
                                      style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,161,242); fill-rule: nonzero; opacity: 1;"
                                      transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                            </g>
</svg>
                    </a>
                </div>
            </header>

            <main>
                <p class="overflow-clip overflow-hidden inline">
                    <!-- tweet.body -->
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque convallis, turpis et
                    hendrerit viverra, tortor mi imperdiet eros, sit amet tristique nisl ligula vitae magna.
                </p>
                <!-- tweet.url -->
                <a class="text-blue-400" href="#">tweet.url</a>
            </main>

            <footer class="space-x-4">
                <!-- tweet.like -->
                <span class="text-gray-400 text-sm">&#9825; 35</span>
                <!-- twitter.user.handle -->
                <span class="text-gray-400 text-sm"><a href="#">&#9733; See LarabellesPHPs other Tweets</a></span>
            </footer>
        </div>
    </article>
</section>

</body>
</html>