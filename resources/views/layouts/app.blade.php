<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="h-full scroll-smooth bg-white antialiased [font-feature-settings:'ss01'] js-focus-visible">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900|lexend:400,500"
          rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex h-full flex-col min-h-full">
<header class="py-10">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <nav class="relative z-50 flex justify-between items-center">
            <div class="flex items-center md:gap-x-12">
                <a aria-label="Home" href="/#" class="font-bold text-xl">
                    writeout.ai
                </a>
            </div>
            <div>
                <a href="https://beyondco.de" class="items-center hidden lg:flex">
                    <span class="text-sm text-slate-800 flex flex-shrink-0 mr-2">A product by</span>
                    <svg width="100%" height="100%" viewBox="0 0 310 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6"><path fill-rule="evenodd" clip-rule="evenodd" d="M33.9537 3.4021C30.2645 1.29399 25.7355 1.29399 22.0463 3.4021L6.04633 12.545C2.30743 14.6815 0 18.6576 0 22.9639V41.0361C0 45.3424 2.30743 49.3185 6.04633 51.455L22.0463 60.5979C25.7355 62.706 30.2645 62.706 33.9537 60.5979L49.9537 51.455C53.6926 49.3185 56 45.3424 56 41.0361V22.9639C56 18.6576 53.6926 14.6815 49.9537 12.545L33.9537 3.4021ZM16.3822 20.054C16.3822 19.2845 15.7583 18.6606 14.9888 18.6606C14.2192 18.6606 13.5957 19.2845 13.5957 20.054V35.8499C13.5957 35.8655 13.5971 35.8807 13.5978 35.8963L13.5957 35.9891C13.5957 40.8676 17.5644 44.8367 22.4429 44.8367C27.3214 44.8367 31.2905 40.8676 31.2905 35.9891C31.2905 32.6471 34.0096 29.9283 37.3513 29.9283C38.4177 29.9283 39.4653 30.2082 40.3811 30.7382C41.0468 31.1241 41.8992 30.8963 42.285 30.2302C42.6702 29.5641 42.4427 28.7117 41.7766 28.3266C40.4371 27.5514 38.9069 27.1415 37.3513 27.1415C32.4728 27.1415 28.504 31.1106 28.504 35.9891C28.504 39.3311 25.7849 42.0502 22.4429 42.0502C19.1009 42.0502 16.3822 39.3311 16.3822 35.9891C16.3822 32.6471 19.1009 29.9283 22.4429 29.9283C24.1463 29.9283 25.7527 30.6362 26.9002 31.8819C26.9002 31.8819 27.3197 32.3665 27.7374 32.9238C27.7374 32.9238 28.1554 31.3912 29.1304 30.2213C29.0973 30.1813 29.069 30.1467 29.0435 30.1155C28.9344 29.9822 28.8768 29.9118 28.7226 29.7562C27.0664 28.0857 24.8198 27.1415 22.4429 27.1415C20.099 27.1415 17.9669 28.0595 16.3822 29.5524V20.054ZM33.2179 40.4223C33.1201 40.3332 32.5826 39.8432 32.0568 39.0544C31.778 40.169 30.6634 41.8412 30.6634 41.8412C30.7003 41.8773 31.2104 42.3588 31.248 42.3942C32.9004 43.9705 35.0619 44.8367 37.3513 44.8367C38.9069 44.8367 40.4371 44.4271 41.7766 43.652C42.4427 43.2665 42.6702 42.4141 42.285 41.748C41.8992 41.082 41.0468 40.8549 40.3811 41.24C39.4653 41.77 38.4177 42.0502 37.3513 42.0502C35.8108 42.0502 34.3547 41.4777 33.2306 40.434C33.228 40.4316 33.2237 40.4277 33.2179 40.4223Z" fill="#15295A"></path><path d="M76.384 44H85.528C90.712 44 94.096 40.796 94.096 36.548C94.096 33.128 92.152 31.328 89.668 30.428C91.288 29.42 92.404 27.728 92.404 25.208C92.404 21.608 89.524 18.44 84.772 18.44H76.384V44ZM79.732 29.42V21.464H84.772C87.508 21.464 89.128 23.3 89.128 25.46C89.128 27.728 87.508 29.42 84.772 29.42H79.732ZM79.732 40.976V32.3H85.708C89.092 32.3 90.82 34.172 90.82 36.656C90.82 39.176 89.092 40.976 85.672 40.976H79.732ZM106.477 44.36C110.221 44.36 112.957 42.704 114.577 40.076L112.129 38.384C111.013 40.292 109.285 41.516 106.513 41.516C102.949 41.516 100.393 38.996 100.285 35.612H115.045C115.081 35.216 115.081 35 115.081 34.676C115.045 28.916 111.229 25.64 106.513 25.64C101.041 25.64 97.1526 29.744 97.1526 35C97.1526 40.292 100.897 44.36 106.477 44.36ZM106.405 28.376C109.141 28.376 111.481 30.14 111.913 33.092H100.501C101.077 30.104 103.705 28.376 106.405 28.376ZM124.233 50.984L135.789 26H132.333L126.177 39.644L119.985 26H116.565L124.449 43.064L120.777 50.984H124.233ZM146.486 44.36C151.886 44.36 155.882 40.184 155.882 35C155.882 29.816 151.886 25.64 146.486 25.64C141.05 25.64 137.054 29.816 137.054 35C137.054 40.184 141.05 44.36 146.486 44.36ZM146.486 41.48C142.742 41.48 140.222 38.6 140.222 35C140.222 31.4 142.742 28.52 146.486 28.52C150.23 28.52 152.714 31.4 152.714 35C152.714 38.6 150.23 41.48 146.486 41.48ZM160.326 44H163.422V32.048C164.142 29.96 165.87 28.484 168.39 28.484C171.162 28.484 172.89 30.284 172.89 33.416V44H175.95V32.948C175.95 28.448 173.178 25.64 169.11 25.64C166.842 25.64 164.682 26.468 163.422 28.268V26H160.326V44ZM189.193 44.36C191.533 44.36 193.621 43.568 195.061 42.02V44H198.157V17.72H195.061V27.98C193.621 26.432 191.533 25.64 189.193 25.64C183.829 25.64 180.121 29.888 180.121 35C180.121 40.112 183.829 44.36 189.193 44.36ZM189.445 41.516C185.809 41.516 183.325 38.6 183.325 35C183.325 31.4 185.809 28.484 189.445 28.484C192.109 28.484 194.017 29.78 195.061 31.436V38.528C194.017 40.22 192.109 41.516 189.445 41.516Z" fill="#15295A"></path><path d="M215.906 44.432C220.766 44.432 224.906 42.02 227.21 38.24L224.402 36.548C222.638 39.392 219.65 41.264 215.906 41.264C210.326 41.264 206.078 36.836 206.078 31.22C206.078 25.604 210.326 21.176 215.906 21.176C219.65 21.176 222.638 23.048 224.402 25.892L227.21 24.2C224.906 20.42 220.766 18.008 215.906 18.008C208.562 18.008 202.694 23.804 202.694 31.22C202.694 38.636 208.562 44.432 215.906 44.432ZM239.158 44.36C244.558 44.36 248.554 40.184 248.554 35C248.554 29.816 244.558 25.64 239.158 25.64C233.722 25.64 229.726 29.816 229.726 35C229.726 40.184 233.722 44.36 239.158 44.36ZM239.158 41.48C235.414 41.48 232.894 38.6 232.894 35C232.894 31.4 235.414 28.52 239.158 28.52C242.902 28.52 245.386 31.4 245.386 35C245.386 38.6 242.902 41.48 239.158 41.48ZM260.666 44.36C263.006 44.36 265.094 43.568 266.534 42.02V44H269.63V17.72H266.534V27.98C265.094 26.432 263.006 25.64 260.666 25.64C255.302 25.64 251.594 29.888 251.594 35C251.594 40.112 255.302 44.36 260.666 44.36ZM260.918 41.516C257.282 41.516 254.798 38.6 254.798 35C254.798 31.4 257.282 28.484 260.918 28.484C263.582 28.484 265.49 29.78 266.534 31.436V38.528C265.49 40.22 263.582 41.516 260.918 41.516ZM283.383 44.36C287.127 44.36 289.863 42.704 291.483 40.076L289.035 38.384C287.919 40.292 286.191 41.516 283.419 41.516C279.855 41.516 277.299 38.996 277.191 35.612H291.951C291.987 35.216 291.987 35 291.987 34.676C291.951 28.916 288.135 25.64 283.419 25.64C277.947 25.64 274.059 29.744 274.059 35C274.059 40.292 277.803 44.36 283.383 44.36ZM283.311 28.376C286.047 28.376 288.387 30.14 288.819 33.092H277.407C277.983 30.104 280.611 28.376 283.311 28.376Z" fill="#15295A"></path></svg>
                </a>
            </div>
            <div class="flex items-center gap-x-5 md:gap-x-8">
                <a class="group inline-flex space-x-2 items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-blue-600 text-white hover:text-slate-100 hover:bg-blue-500 active:bg-blue-800 active:text-blue-100 focus-visible:outline-blue-600"
                   target="_blank"
                   href="https://github.com/beyondcode/writeout.ai">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                    <span>Star on GitHub</span>
                </a>
            </div>
        </nav>
    </div>
</header>
<main>
    @yield('content')
</main>
<footer class="bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div
            class="flex flex-col items-center border-t border-slate-400/10 py-10 sm:flex-row-reverse sm:justify-between">
            <div class="flex gap-x-6">
                <a class="group" aria-label="Twitter" href="https://twitter.com">
                    <svg aria-hidden="true" class="h-6 w-6 fill-slate-500 group-hover:fill-slate-700">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0 0 22 5.92a8.19 8.19 0 0 1-2.357.646 4.118 4.118 0 0 0 1.804-2.27 8.224 8.224 0 0 1-2.605.996 4.107 4.107 0 0 0-6.993 3.743 11.65 11.65 0 0 1-8.457-4.287 4.106 4.106 0 0 0 1.27 5.477A4.073 4.073 0 0 1 2.8 9.713v.052a4.105 4.105 0 0 0 3.292 4.022 4.093 4.093 0 0 1-1.853.07 4.108 4.108 0 0 0 3.834 2.85A8.233 8.233 0 0 1 2 18.407a11.615 11.615 0 0 0 6.29 1.84"></path>
                    </svg>
                </a>
                <a class="group" aria-label="GitHub" href="https://github.com">
                    <svg aria-hidden="true" class="h-6 w-6 fill-slate-500 group-hover:fill-slate-700">
                        <path
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844a9.59 9.59 0 0 1 2.504.337c1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.02 10.02 0 0 0 22 12.017C22 6.484 17.522 2 12 2Z"></path>
                    </svg>
                </a>
                <a class="group text-sm" href="/imprint">
                    Imprint
                </a>
                <a class="group text-sm" href="/privacy-policy">
                    Privacy Policy
                </a>
            </div>
            <p class="mt-6 text-sm text-slate-500 sm:mt-0">
                Copyright © {{ date('Y') }} Beyond Code. All rights reserved.
            </p>
        </div>
    </div>
</footer>
</body>
</html>