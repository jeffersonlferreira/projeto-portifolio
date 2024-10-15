<?php
    $projetos = [
        [
            'titulo' => 'Travelgram',
            'descricao' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',
            'img' => '/assets/image0.png',
            'tecnologias' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'titulo' => 'Página de receita',
            'descricao' => 'Página com o passo a passo de uma receita para cupcakes',
            'img' => '/assets/image1.png',
            'tecnologias' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'titulo' => 'Tech News',
            'descricao' => 'Homepage de um portal de notícias sobre a área de tecnologia',
            'img' => '/assets/image2.png',
            'tecnologias' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'titulo' => 'Refund',
            'descricao' => 'Um sistema para pedido e acompanhamento de reembolso ',
            'img' => '/assets/Thumbnail_Project-04.png',
            'tecnologias' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'titulo' => 'Página de turismo',
            'descricao' => 'Página com as principais informações para quem quer viajar para Busan',
            'img' => '/assets/Thumbnail_Project-06.png',
            'tecnologias' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'titulo' => 'Zingen',
            'descricao' => 'Landing Page completa e responsiva de um aplicativo de Karaokê',
            'img' => '/assets/Thumbnail_Project-05.png',
            'tecnologias' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
    ];

?>

<main class="min-h-[951px] bg-[#16181D]">
    <section class="mx-auto max-w-screen-xl pt-20">

        <div>
            <h2 class="text-center text-[#e3646e] text-xl font-normal font-['Inconsolata'] leading-normal">Meu trabalho</h2>
            <h3 class="text-center text-[#e2e4e8] text-2xl font-bold font-['Asap'] leading-[28.80px]">Veja os projetos em destaque</h3>
        </div>

        <div class="flex flex-wrap gap-6 justify-center mt-14">

            <?php foreach ($projetos as $projeto): ?>

                <div class="flex gap-4 p-3 bg-[#292C34] rounded-lg w-[530px] h-[180px] border border-transparent hover:border-[#878ea0] transition duration-700 cursor-pointer">
                    <img src="<?=$projeto['img']?>" alt="" class="w-56 h-[156px] bg-[#16181d] rounded-lg">
                    <div class="flex flex-col justify-between">
                        <div>

                            <h2 class="text-[#e2e4e8] text-base font-bold font-['Asap'] leading-tight">
                                <?=$projeto['titulo']?>
                            </h2>

                            <p class="h-16 text-[#c0c3cd] text-sm font-normal font-['Maven Pro'] leading-tight mt-2">
                                <?=$projeto['descricao']?>
                            </p>

                        </div>
                        <ul class="font-bold font-['Inconsolata'] text-xs font-bold">
                            <?php

                                $colors = ['#BB72E9','#3996DB','#E3646E','#EABD5F'];

                                foreach ($projeto['tecnologias'] as $posicao => $tecnologia):

                            ?>

                            <span class="bg-[<?= $colors[$posicao]?>] px-2 py-0.5 rounded-full"><?=$tecnologia?></span>

                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>

            <?php endforeach; ?>

    </section>
</main>