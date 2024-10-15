<?php
    $redesocial = [
        [
            'name' => 'Linkedin',
            'href' => '#',
            'ico' =>
                '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256" class="w-7 h-7 fill-gray-400 group-hover:fill-blue-500 group-hover:transition duration-700">
                    <path
                        d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24Zm0,192H40V40H216V216ZM96,112v64a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0Zm88,28v36a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140ZM100,84A12,12,0,1,1,88,72,12,12,0,0,1,100,84Z">
                    </path>
                </svg>',
        ],
        [
            'name' => 'Instagram',
            'href' => '#',
            'ico' =>
                '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256" class="w-7 h-7 fill-gray-400 group-hover:fill-blue-500 group-hover:transition duration-700">
                    <path
                        d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z">
                    </path>
                </svg>',
        ],
        [
            'name' => 'GitHub',
            'href' => '#',
            'ico' =>
                '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256" class="w-7 h-7 fill-gray-400 group-hover:fill-blue-500 group-hover:transition duration-700">
                    <path
                        d="M208.31,75.68A59.78,59.78,0,0,0,202.93,28,8,8,0,0,0,196,24a59.75,59.75,0,0,0-48,24H124A59.75,59.75,0,0,0,76,24a8,8,0,0,0-6.93,4,59.78,59.78,0,0,0-5.38,47.68A58.14,58.14,0,0,0,56,104v8a56.06,56.06,0,0,0,48.44,55.47A39.8,39.8,0,0,0,96,192v8H72a24,24,0,0,1-24-24A40,40,0,0,0,8,136a8,8,0,0,0,0,16,24,24,0,0,1,24,24,40,40,0,0,0,40,40H96v16a8,8,0,0,0,16,0V192a24,24,0,0,1,48,0v40a8,8,0,0,0,16,0V192a39.8,39.8,0,0,0-8.44-24.53A56.06,56.06,0,0,0,216,112v-8A58.14,58.14,0,0,0,208.31,75.68ZM200,112a40,40,0,0,1-40,40H112a40,40,0,0,1-40-40v-8a41.74,41.74,0,0,1,6.9-22.48A8,8,0,0,0,80,73.83a43.81,43.81,0,0,1,.79-33.58,43.88,43.88,0,0,1,32.32,20.06A8,8,0,0,0,119.82,64h32.35a8,8,0,0,0,6.74-3.69,43.87,43.87,0,0,1,32.32-20.06A43.81,43.81,0,0,1,192,73.83a8.09,8.09,0,0,0,1,7.65A41.72,41.72,0,0,1,200,104Z">
                    </path>
                </svg>',
        ],
        [
            'name' => 'E-mail',
            'href' => '#',
            'ico' =>
                '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256" class="w-7 h-7 fill-gray-400 group-hover:fill-blue-500 group-hover:transition duration-700">
                    <path
                        d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48ZM203.43,64,128,133.15,52.57,64ZM216,192H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z">
                    </path>
                </svg>',
        ]
    ];
?>

<footer class="min-h-[787px] bg-[url('/assets/Background_Contacts.png')] bg-center bg-cover bg-no-repeat">

    <div class="mx-auto max-w-screen-md flex flex-col gap-12 pt-32">

        <section class="text-center">
            <h2 class="text-center text-purple-400 text-xl font-normal font-['Inconsolata'] leading-normal">Contato</h>
                <h3 class="text-center text-[#E2E4E9] text-2xl font-bold font-['Asap'] leading-[28.80px]">Gostou do meu trabalho?</h3>
                <p class="text-center text-gray-500 text-base font-normal font-['Maven Pro'] leading-snug">Entre em contato ou acompanhe as minhas redes sociais!</p>
        </section>

        <address class="flex flex-col items-center gap-4">

            <?php foreach ($redesocial as $social): ?>

                <a href="<?=$social['href']?>" target="_blank" class="bg-[#292C34] flex items-center justify-between w-96 h-16 p-5 gap-3 rounded-lg border border-transparent hover:border-blue-500 transition duration-700 group">

                    <?=$social['ico']?>

                    <p class="w-full grow shrink basis-0 text-[#878EA1] text-base font-medium font-['Maven Pro'] leading-snug"><?=$social['name']?></p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256" class="w-7 h-7 fill-blue-500">
                        <path
                            d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z">
                        </path>
                    </svg>
                </a>

            <?php endforeach; ?>

        </address>

    </div>

</footer>