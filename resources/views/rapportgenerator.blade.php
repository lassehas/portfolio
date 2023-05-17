<x-layout>
    <x-slot name="title">SEO Rapport Generator</x-slot>

    <x-slot name="content">

        <div class="">
            <div class="mt-4 md:mt-10">
                <h1 class="text-3xl font-bold text-center">SEO Rapport Generator</h1>
                <p class="text-center">Dette er et værktøj til at generere SEO rapporter for en hjemmeside.</p>
            </div>

            <div class="text-center my-4">
                <ul class="grid grid-cols-2 mx-3">
                    <li class="grid grid-cols-3 my-1">
                        <div class="col-span-1">
                            <label class="flex items-center justify-end">
                                <input class="w-5 h-5 mr-2" type="checkbox" name="meta_title" id="meta_title">
                            </label>

                        </div>
                        <div class="col-span-2 grid justify-start">
                            Meta Title
                        </div>
                    </li>
                    <li class="grid grid-cols-3 my-1">
                        <div class="col-span-1">
                            <label class="flex items-center justify-end">
                                <input class="w-5 h-5 mr-2" type="checkbox" name="meta_title" id="meta_description">
                            </label>

                        </div>
                        <div class="col-span-2 grid justify-start">
                            Meta Description
                        </div>
                    </li>
                    <li class="grid grid-cols-3 my-1">
                        <div class="col-span-1">
                            <label class="flex items-center justify-end">
                                <input class="w-5 h-5 mr-2" type="checkbox" name="meta_title" id="non_canonical">
                            </label>

                        </div>
                        <div class="col-span-2 grid justify-start">
                            Non-canonical url
                        </div>
                    </li>
                    <li class="grid grid-cols-3 my-1">
                        <div class="col-span-1">
                            <label class="flex items-center justify-end">
                                <input class="w-5 h-5 mr-2" type="checkbox" name="meta_title" id="sitemap">
                            </label>

                        </div>
                        <div class="col-span-2 grid justify-start">
                            Sitemap
                        </div>
                    </li>
                    <li class="grid grid-cols-3 my-1">
                        <div class="col-span-1">
                            <label class="flex items-center justify-end">
                                <input class="w-5 h-5 mr-2" type="checkbox" name="meta_title" id="backlinks">
                            </label>

                        </div>
                        <div class="col-span-2 grid justify-start">
                            Skadelige backlinks
                        </div>
                    </li>
                </ul>
            </div>

            <div class="my-10">
                <div class="text-center text-2xl break-words mx-5">
                    Rapporten er klar til copy paste
                </div>

                <div class="text-center my-3">
                    <label>
                    <textarea class="w-4/5 h-60 md:w-1/2 md:h-96 rounded-lg px-3 resize-none" name="rapport" id="rapport" cols="30"></textarea>
                    </label>
                </div>

                <div class="flex justify-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" onclick="copyToClipboard()">Kopier til udklipsholder</button>
                </div>
            </div>
        </div>


        <script>
            let meta_title = document.getElementById('meta_title');
            let meta_description = document.getElementById('meta_description');
            let non_canonical = document.getElementById('non_canonical');
            let sitemap = document.getElementById('sitemap');
            let backlinks = document.getElementById('backlinks');

            //Add event listeners to checkboxes to update the report in textarea
            meta_title.addEventListener('change', function () {
                updateReport();
            });

            meta_description.addEventListener('change', function () {
                updateReport();
            });

            non_canonical.addEventListener('change', function () {
                updateReport();
            });

            sitemap.addEventListener('change', function () {
                updateReport();
            });

            backlinks.addEventListener('change', function () {
                updateReport();
            });

            let text_meta_title_header = 'Manglende metatitler.\n';
            let text_meta_title = 'Metatitel en vigtig del af din hjemmesides præsentation og synlighed både for brugere og søgemaskiner.' +
                ' Det er en god praksis at skrive relevante, informative og engagerende metatitler for at forbedre brugeroplevelsen, SEO og tiltrække mere trafik til din hjemmeside.\n';

            let text_meta_description_header = 'Manglende metabeskrivelser.\n';
            let text_meta_description = 'Meta-beskrivelse er et lille stykke kode med en tekst, der beskriver, hvad den enkelte side på et website handler om.' +
                ' Denne tekst kan også blive vist i søgeresultater\n';

            let text_non_canonical_header = 'Non-canonical url.\n';
            let text_non_canonical = 'Non-canonical url er en url, der ikke er den primære url for en side. ' +
                'Når der findes flere versioner af samme side, kan søgemaskinerne have svært ved at vurdere hvilken de skal indeksere.' +
                'Et eksempel er fx. med eller uden "www.".\n' +
                'Eksempel 1:\n' +
                '"www.dinhjemmeside.dk"\n' +
                'Eksempel 2: "dinhjemmeside.dk"\n';

            let text_sitemap_header = 'Sitemap.\n';
            let text_sitemap = 'Sitemappet er en fil man laver, som indeholder en oversigt over alle de sider som søgemaskinerne skal indeksere. Det er ikke alle sider vi ønsker skal vises i Google. Her kan der være tale om testsider, udgåede sider osv.' +
                '\nPå denne måde opdager søgemaskinerne ikke disse sider, og dermed påvirker disse ikke SEO scoren.\n';

            let text_backlinks_header = 'Skadelige backlinks.\n';
            let text_backlinks = 'Andre hjemmesider der henviser til jeres, har en betydning for den overordnede troværdighed hos Google.' +
                ' Dette kan være positivt, hvis større troværdige sider linker til jeres.' +
                ' Dog kan det også have den modsatte effekt, når skadelige/ikke troværdige sider bruger jeres navn og link på deres sider.' +
                ' Dette er ofte set som spam med det formål at tjene penge. Vi holder hele tiden øje med jeres domæne, og finder skadelige domæner.' +
                ' Disse sender vi direkte til Google, hvor vi fortæller at jeres domæne ikke er associeret med disse.\n';

            function updateReport() {
                let report = '';
                if (meta_title.checked) {
                    report += text_meta_title_header + text_meta_title + '\n';
                }
                if (meta_description.checked) {
                    report += text_meta_description_header + text_meta_description + '\n';
                }
                if (non_canonical.checked) {
                    report += text_non_canonical_header + text_non_canonical + '\n';
                }
                if (sitemap.checked) {
                    report += text_sitemap_header + text_sitemap + '\n';
                }
                if (backlinks.checked) {
                    report += text_backlinks_header + text_backlinks + '\n';
                }
                document.getElementById('rapport').value = report;
            }

            //Make function to copy text to clipboard from textarea
            function copyToClipboard() {
                let copyText = document.getElementById("rapport");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand("copy");
            }

            


        </script>

    </x-slot>
</x-layout>

