<div class="container">
    <div class="row">
        <div class="col-md-12 centered">
            <h3><span><?= $lang['gallery'] ?></span></h3>
            <p><?= $lang['gallery_description'] ?></p>
        </div>
    </div>
</div>

<div class="container content" style="margin-top: 50px; margin-bottom: 50px;">
    <div id="gallery" class="gallery">
        
    </div>
</div>


<script>


const allImages = [
    // alabay
    { src: "images/upload/prides/alabay0.jpg", caption: "<?= $lang['pride_alabay_description'] ?>", position: 1 },
    { src: "images/upload/prides/alabay1.jpg", caption: "<?= $lang['pride_alabay_description'] ?>", position: 2 },
    { src: "images/upload/prides/alabay2.jpg", caption: "<?= $lang['pride_alabay_description'] ?>", position: 3 },
    { src: "images/upload/prides/alabay3.jpg", caption: "<?= $lang['pride_alabay_description'] ?>", position: 4 },
    { src: "images/upload/prides/alabay4.jpg", caption: "<?= $lang['pride_alabay_description'] ?>", position: 5 },
    { src: "images/upload/prides/alabay5.jpg", caption: "<?= $lang['pride_alabay_description'] ?>", position: 6 },

    // ahalteke
    { src: "images/upload/prides/bedew3.jpg", caption: "<?= $lang['pride_ahalteke_description'] ?>", position: 7 },
    { src: "images/upload/prides/bedew1.jpg", caption: "<?= $lang['pride_ahalteke_description'] ?>", position: 8 },
    { src: "images/upload/prides/ornament3.jpg", caption: "<?= $lang['pride_ahalteke_description'] ?>", position: 9 },
    { src: "images/upload/prides/bedew4.jpg", caption: "<?= $lang['pride_ahalteke_description'] ?>", position: 10 },

    // carpets
    { src: "images/upload/prides/haly0.jpg", caption: "<?= $lang['pride_carpets_description'] ?>", position: 11 },
    { src: "images/upload/prides/haly1.jpg", caption: "<?= $lang['pride_carpets_description'] ?>", position: 12 },
    { src: "images/upload/prides/haly2.jpg", caption: "<?= $lang['pride_carpets_description'] ?>", position: 13 },
    { src: "images/upload/prides/haly3.jpg", caption: "<?= $lang['pride_carpets_description'] ?>", position: 14 },
    { src: "images/upload/prides/haly4.jpg", caption: "<?= $lang['pride_carpets_description'] ?>", position: 15 },
    { src: "images/upload/prides/haly5.jpg", caption: "<?= $lang['pride_carpets_description'] ?>", position: 16 },

    // kitchen
    { src: "images/upload/prides/tagam0.jpg", caption: "<?= $lang['pride_kitchen_description'] ?>", position: 17 },
    { src: "images/upload/prides/tagam1.jpg", caption: "<?= $lang['pride_kitchen_description'] ?>", position: 18 },
    { src: "images/upload/prides/tagam2.jpg", caption: "<?= $lang['pride_kitchen_description'] ?>", position: 19 },
    { src: "images/upload/prides/tagam3.jpg", caption: "<?= $lang['pride_kitchen_description'] ?>", position: 20 },
    { src: "images/upload/prides/tagam4.jpg", caption: "<?= $lang['pride_kitchen_description'] ?>", position: 21 },
    { src: "images/upload/prides/tagam5.jpg", caption: "<?= $lang['pride_kitchen_description'] ?>", position: 22 },
    { src: "images/upload/prides/tagam6.jpg", caption: "<?= $lang['pride_kitchen_description'] ?>", position: 23 },
    { src: "images/upload/prides/tagam7.jpg", caption: "<?= $lang['pride_kitchen_description'] ?>", position: 24 },
    { src: "images/upload/prides/tagam8.jpg", caption: "<?= $lang['pride_kitchen_description'] ?>", position: 25 },
    { src: "images/upload/prides/tagam9.jpg", caption: "<?= $lang['pride_kitchen_description'] ?>", position: 26 },
    { src: "images/upload/prides/tagam10.jpg", caption: "<?= $lang['pride_kitchen_description'] ?>", position: 27 },
    { src: "images/upload/prides/tagam11.jpg", caption: "<?= $lang['pride_kitchen_description'] ?>", position: 28 },

    // kushtdepdi
    { src: "images/upload/prides/kushtdepdi1.jpg", caption: "<?= $lang['pride_kushtdepdi_description'] ?>", position: 29 },
    { src: "images/upload/prides/kushtdepdi2.jpg", caption: "<?= $lang['pride_kushtdepdi_description'] ?>", position: 30 },

    // ornaments
    { src: "images/upload/prides/ornament1.jpg", caption: "<?= $lang['pride_ornaments_description'] ?>", position: 31 },
    { src: "images/upload/prides/ornament2.jpg", caption: "<?= $lang['pride_ornaments_description'] ?>", position: 32 },
    { src: "images/upload/prides/ornament3.jpg", caption: "<?= $lang['pride_ornaments_description'] ?>", position: 33 },
    { src: "images/upload/prides/ornament4.jpg", caption: "<?= $lang['pride_ornaments_description'] ?>", position: 34 },
    { src: "images/upload/prides/ornament5.jpg", caption: "<?= $lang['pride_ornaments_description'] ?>", position: 35 },

    // dutar
    { src: "images/upload/prides/dutar1.jpg", caption: "<?= $lang['pride_dutar_description'] ?>", position: 36 },
    { src: "images/upload/prides/dutar2.jpg", caption: "<?= $lang['pride_dutar_description'] ?>", position: 37 },
    { src: "images/upload/prides/dutar3.jpg", caption: "<?= $lang['pride_dutar_description'] ?>", position: 38 },
    { src: "images/upload/prides/dutar4.jpg", caption: "<?= $lang['pride_dutar_description'] ?>", position: 39 },
    { src: "images/upload/prides/dutar5.jpg", caption: "<?= $lang['pride_dutar_description'] ?>", position: 40 },

    // closes
    { src: "images/upload/prides/closes1.jpg", caption: "<?= $lang['pride_closes_description'] ?>", position: 41 },
    { src: "images/upload/prides/closes2.jpg", caption: "<?= $lang['pride_closes_description'] ?>", position: 42 },

    // festivals
    { src: "images/upload/prides/bayram1.jpg", caption: "<?= $lang['pride_festivals_description'] ?>", position: 43 },
    { src: "images/upload/prides/bayram2.jpg", caption: "<?= $lang['pride_festivals_description'] ?>", position: 44 },
    { src: "images/upload/prides/bayram4.jpg", caption: "<?= $lang['pride_festivals_description'] ?>", position: 45 },
    { src: "images/upload/prides/bayram5.jpg", caption: "<?= $lang['pride_festivals_description'] ?>", position: 46 },

    // asgabat
    { src: "images/upload/asgabat/1.jpg", caption: "National museum", position: 47 },
    { src: "images/upload/asgabat/4.jpg", caption: "Arch of Neutrality", position: 48 },
    { src: "images/upload/asgabat/2.jpg", caption: "Ashgabat monument", position: 49 },
    { src: "images/upload/gypjak.jpg", caption: "Turkmenbashy Rukhi Mosque", position: 50 },
    { src: "images/upload/asgabat/3.jpg", caption: "Bagt koshgi", position: 51 },
    { src: "images/upload/asgabat/5.jpg", caption: "Bagt koshgi", position: 52 },
    { src: "images/upload/asgabat/6.jpg", caption: "Monument of Independence", position: 53 },
    { src: "images/upload/asgabat/8.jpg", caption: "Turkmenbashi Rukhi mosque", position: 54 },
    { src: "images/upload/asgabat/9.jpg", caption: "Turkmenbashi Rukhi mosque", position: 55 },
    { src: "images/upload/asgabat/10.jpg", caption: "Turkmenbashi Rukhi mosque", position: 56 },
    { src: "images/upload/asgabat/11.jpg", caption: "Turkmenbashi Rukhi mosque", position: 57 },
    { src: "images/upload/asgabat/12.jpg", caption: "Ashgabat", position: 58 },
    { src: "images/upload/asgabat/13.webp", caption: "Ashgabat International Airport", position: 59 },

    // mary
    { src: "images/upload/mary/1.jpg", caption: "", position: 60 },
    { src: "images/upload/mary/3.jpg", caption: "Small Gyz-Gala", position: 61 },
    { src: "images/upload/mary/4.jpg", caption: "", position: 62 },
    { src: "images/upload/mary/5.jpg", caption: "", position: 63 },
    { src: "images/upload/mary/7.jpg", caption: "Soltan Sanjar", position: 64 },
    { src: "images/upload/mary/11.jpg", caption: "Soltan Sanjar", position: 65 },
    { src: "images/upload/mary/12.jpg", caption: "Soltan Sanjar", position: 66 },
    { src: "images/upload/mary/13.jpg", caption: "", position: 67 },
    { src: "images/upload/mary/15.jpg", caption: "", position: 68 },
    { src: "images/upload/mary/16.jpg", caption: "Gyz-Gala", position: 69 },
    { src: "images/upload/mary/17.jpg", caption: "", position: 70 },

    // balkan
    { src: "images/upload/balkan/1.jpg", caption: "Yangi-kala", position: 71 },
    { src: "images/upload/balkan/2.jpg", caption: "Yangi-kala", position: 72 },
    { src: "images/upload/balkan/3.jpg", caption: "Yangi-kala", position: 73 },
    { src: "images/upload/balkan/4.jpg", caption: "Yangi-kala", position: 74 },
    { src: "images/upload/balkan/5.jpg", caption: "Yangi-kala", position: 75 },
    { src: "images/upload/balkan/6.webp", caption: "Church of St. Michael the Archangel", position: 76 },

    // ahal
    { src: "images/upload/ahal/1-akhalteke horse.jpg", caption: "Akhalteke horse", position: 77 },
    { src: "images/upload/ahal/2-Nisa.png", caption: "Nisa is an ancient city inscribed on the UNESCO World Heritage List, the capital of the great Parthian Empire (III BC – III AD)", position: 78 },
    { src: "images/upload/ahal/3-nisa.jpg", caption: "Nisa is an ancient city inscribed on the UNESCO World Heritage List, the capital of the great Parthian Empire (III BC – III AD)", position: 79 },
    { src: "images/upload/ahal/4.jpg", caption: "Nisa is an ancient city inscribed on the UNESCO World Heritage List, the capital of the great Parthian Empire (III BC – III AD)", position: 80 },
    { src: "images/upload/ahal/5.jpg", caption: "Nisa is an ancient city inscribed on the UNESCO World Heritage List, the capital of the great Parthian Empire (III BC – III AD)", position: 81 },
    { src: "images/upload/ahal/6.jpg", caption: "Nisa is an ancient city inscribed on the UNESCO World Heritage List, the capital of the great Parthian Empire (III BC – III AD)", position: 82 },
    { src: "images/upload/ahal/7.jpg", caption: "Nisa is an ancient city inscribed on the UNESCO World Heritage List, the capital of the great Parthian Empire (III BC – III AD)", position: 83 },
    { src: "images/upload/ahal/8.jpg", caption: "Kow-Ata is an underground lake with thermal water. The water temperature is constant at 33-38 °C all year.", position: 84 },
    { src: "images/upload/ahal/9.webp", caption: "Kow-Ata is an underground lake with thermal water. The water temperature is constant at 33-38 °C all year.", position: 85 },
    { src: "images/upload/ahal/10.jpg", caption: "Kow-Ata is an underground lake with thermal water. The water temperature is constant at 33-38 °C all year.", position: 86 },
    { src: "images/upload/ahal/11.jpg", caption: "Seyit Jemaletdin Mosquebuilt in 1456 which was damaged to great lengths in the 1948 Earthquake", position: 87 },
    { src: "images/upload/ahal/12.jpg", caption: "Seyit Jemaletdin Mosquebuilt in 1456 which was damaged to great lengths in the 1948 Earthquake", position: 88 },
    { src: "images/upload/ahal/13.jpg", caption: "Seyit Jemaletdin Mosquebuilt in 1456 which was damaged to great lengths in the 1948 Earthquake", position: 89 },
    { src: "images/upload/ahal/14.jpg", caption: "Seyit Jemaletdin Mosquebuilt in 1456 which was damaged to great lengths in the 1948 Earthquake", position: 90 },
    { src: "images/upload/ahal/15.jpg", caption: "Kopetdag Mountains ", position: 91 },
    { src: "images/upload/ahal/16.jpg", caption: "Kopetdag Mountains ", position: 92 },
    { src: "images/upload/ahal/17.jpg", caption: "Kopetdag Mountains ", position: 93 },
    { src: "images/upload/ahal/18.jpg", caption: "Kopetdag Mountains ", position: 94 },
    { src: "images/upload/ahal/19.jpg", caption: "Kopetdag Mountains ", position: 95 },
    { src: "images/upload/ahal/20.jpg", caption: "Kopetdag Mountains ", position: 96 },
    { src: "images/upload/ahal/21.jpg", caption: "Kopetdag Mountains ", position: 97 },
    { src: "images/upload/ahal/22.jpg", caption: "Kopetdag Mountains ", position: 98 },
    { src: "images/upload/ahal/23.jpg", caption: "Kopetdag Mountains ", position: 99 },
    { src: "images/upload/ahal/24.jpg", caption: "Kopetdag Mountains ", position: 100 },
    { src: "images/upload/ahal/25.jpg", caption: "Kopetdag Mountains ", position: 101 },
    { src: "images/upload/dasoguz/10.jpg", caption: "", position: 102 },
    { src: "images/upload/dasoguz/11.jpg", caption: "", position: 103 },
    { src: "images/upload/dasoguz/12.jpg", caption: "", position: 104 },
    { src: "images/upload/dasoguz/13.jpg", caption: "", position: 105 },
    { src: "images/upload/dasoguz/14.jpg", caption: "", position: 106 },
    { src: "images/upload/dasoguz/15.jpg", caption: "", position: 107 },
    { src: "images/upload/dasoguz/16.jpg", caption: "", position: 108 },
    { src: "images/upload/dasoguz/17.jpg", caption: "", position: 109 },
    { src: "images/upload/dasoguz/18.jpg", caption: "", position: 110 },
    { src: "images/upload/dasoguz/19.jpg", caption: "", position: 111 },
    { src: "images/upload/dasoguz/20.jpg", caption: "", position: 112 },
    { src: "images/upload/dasoguz/21.jpg", caption: "", position: 113 },
    { src: "images/upload/dasoguz/22.jpg", caption: "", position: 114 },
    { src: "images/upload/derweze_full.jpg", caption: "Derweze gas crater", position: 115 },

    // dasoguz
    { src: "images/upload/dasoguz/1.jpeg", caption: "Dashoguz city", position: 116 },
    { src: "images/upload/dasoguz/2.jpg", caption: "Dashoguz hotel", position: 117 },
    { src: "images/upload/dasoguz/3.jpg", caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites", position: 118 },
    { src: "images/upload/dasoguz/4.jpg", caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites", position: 119 },
    { src: "images/upload/dasoguz/5.jpg", caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites", position: 120 },
    { src: "images/upload/dasoguz/6.jpg", caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites", position: 121 },
    { src: "images/upload/dasoguz/7.jpg", caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites", position: 122 },
    { src: "images/upload/dasoguz/8.jpg", caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites", position: 123 },
    { src: "images/upload/dasoguz/9.jpg", caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites", position: 124 },
    { src: "images/upload/koneurgench.jpg", caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites", position: 125 },
    { src: "images/upload/dasoguz/25.webp", caption: "Darvaza gas crater", position: 126 },

    // lebap
    { src: "images/upload/lebap/1.jpg", caption: "Koytendag Mountains", position: 127 },
    { src: "images/upload/lebap/2.jpg", caption: "Koytendag Mountains", position: 128 },
    { src: "images/upload/lebap/3.jpg", caption: "Koytendag Mountains", position: 129 },
    { src: "images/upload/lebap/4.jpg", caption: "Koytendag Mountains", position: 130 },
    { src: "images/upload/lebap/5.jpg", caption: "Koytendag Mountains", position: 131 },
    { src: "images/upload/lebap/6.jpg", caption: "Koytendag Mountains", position: 132 },
    { src: "images/upload/lebap/7.jpg", caption: "Waterfall in Koytendag", position: 133 },
    { src: "images/upload/lebap/8.jpg", caption: "Waterfall in Koytendag", position: 134 },
    { src: "images/upload/lebap/9.jpg", caption: "Koytendag Mountains", position: 135 },
    { src: "images/upload/lebap/10.jpg", caption: "Koytendag Mountains", position: 136 },
    { src: "images/upload/lebap/11.jpg", caption: "Koytendag Mountains", position: 137 },
    { src: "images/upload/lebap/12.jpg", caption: "Koytendag Mountains", position: 138 },
    { src: "images/upload/lebap/13.jpg", caption: "Koytendag Mountains", position: 139 },
    { src: "images/upload/lebap/14.jpg", caption: "Koytendag Mountains", position: 140 },
    { src: "images/upload/lebap/15.jpg", caption: "Plaza of dinosaurs-steps of dinosaurs", position: 141 },
    { src: "images/upload/lebap/16.jpg", caption: "Plaza of dinosaurs-steps of dinosaurs", position: 142 },
    { src: "images/upload/lebap/17.jpg", caption: "Plaza of dinosaurs-steps of dinosaurs", position: 143 },
    { src: "images/upload/lebap/18.jpg", caption: "Plaza of dinosaurs-steps of dinosaurs", position: 144 },
    { src: "images/upload/lebap/19.png", caption: "Plaza of dinosaurs-steps of dinosaurs", position: 145 },
    { src: "images/upload/lebap/20.jpg", caption: "Hojababa (gaynarbaba) lake", position: 146 },
    { src: "images/upload/lebap/21.jpg", caption: "Daya Hatyn сaravansarai", position: 147 },
    { src: "images/upload/lebap/22.jpg", caption: "Daya Hatyn сaravansarai", position: 148 },
    { src: "images/upload/lebap/23.jpg", caption: "Daya Hatyn сaravansarai", position: 149 },
    { src: "images/upload/lebap/24.jpg", caption: "Amul cave", position: 150 },
    { src: "images/upload/lebap/25.jpg", caption: "Amudarya bridge", position: 151 },
    
    // Добавленные изображения из туров
    { src: "images/upload/tours/3/1.jpg", caption: "", position: 152 },
    { src: "images/upload/tours/3/2.jpg", caption: "", position: 153 },
    { src: "images/upload/tours/3/3.jpg", caption: "", position: 154 },
    { src: "images/upload/tours/3/4.jpg", caption: "", position: 155 },
    { src: "images/upload/tours/3/5.jpg", caption: "", position: 156 },
    { src: "images/upload/tours/3/6.jpg", caption: "", position: 157 },
    { src: "images/upload/derweze_full.jpg", caption: "", position: 158 },
    { src: "images/upload/tours/3/8.jpg", caption: "", position: 159 },
    { src: "images/upload/tours/3/9.jpg", caption: "", position: 160 },
    { src: "images/upload/tours/3/10.jpg", caption: "", position: 161 },
    { src: "images/upload/tours/3/11.jpg", caption: "", position: 162 },
    { src: "images/upload/tours/3/12.jpg", caption: "", position: 163 },
    { src: "images/upload/tours/3/13.jpg", caption: "", position: 164 },
    { src: "images/upload/tours/3/14.jpg", caption: "", position: 165 },
    { src: "images/upload/tours/3/15.jpeg", caption: "", position: 166 },
    { src: "images/upload/tours/3/16.jpg", caption: "", position: 167 },
    { src: "images/upload/tours/3/17.jpg", caption: "", position: 168 },
    { src: "images/upload/tours/3/18.jpg", caption: "", position: 169 },
    { src: "images/upload/tours/3/19.jpg", caption: "", position: 170 },
    { src: "images/upload/tours/3/20.jpg", caption: "", position: 171 },
    { src: "images/upload/tours/3/21.jpg", caption: "", position: 172 },
    { src: "images/upload/tours/3/22.jpg", caption: "", position: 173 },
    { src: "images/upload/tours/3/23.jpg", caption: "", position: 174 },
    { src: "images/upload/tours/3/24.jpg", caption: "", position: 175 },
    { src: "images/upload/tours/3/25.jpg", caption: "", position: 176 },
    { src: "images/upload/tours/3/26.jpg", caption: "", position: 177 },
    { src: "images/upload/tours/3/27.webp", caption: "", position: 178 },
    { src: "images/upload/tours/3/28.jpg", caption: "", position: 179 },
    { src: "images/upload/tours/3/29.jpg", caption: "", position: 180 },
    { src: "images/upload/tours/3/30.jpg", caption: "", position: 181 },
    { src: "images/upload/tours/6/1.jpg", caption: "", position: 182 },
    { src: "images/upload/tours/6/2.jpg", caption: "", position: 183 },
    { src: "images/upload/tours/6/3.jpg", caption: "", position: 184 },
    { src: "images/upload/tours/6/4.jpg", caption: "", position: 185 },
    { src: "images/upload/tours/6/5.jpg", caption: "", position: 186 },
    { src: "images/upload/tours/6/6.jpg", caption: "", position: 187 },
    { src: "images/upload/tours/6/7.jpg", caption: "", position: 188 },
    { src: "images/upload/tours/6/8.jpg", caption: "", position: 189 },
    { src: "images/upload/tours/6/9.jpg", caption: "", position: 190 },
    { src: "images/upload/tours/6/10.png", caption: "", position: 191 },
    { src: "images/upload/tours/6/11.jpg", caption: "", position: 192 },
    { src: "images/upload/tours/6/12.jpg", caption: "", position: 193 },
    { src: "images/upload/tours/6/13.webp", caption: "", position: 194 },
    { src: "images/upload/tours/6/14.jpg", caption: "", position: 195 },
    { src: "images/upload/tours/6/15.jpg", caption: "", position: 196 },
    { src: "images/upload/tours/6/16.jpg", caption: "", position: 197 },
    { src: "images/upload/tours/6/17.jpg", caption: "", position: 198 },
    { src: "images/upload/tours/6/18.jpg", caption: "", position: 199 },
    { src: "images/upload/tours/6/19.jpg", caption: "", position: 200 },
    { src: "images/upload/tours/6/20.jpg", caption: "", position: 201 },
    { src: "images/upload/tours/6/21.jpg", caption: "", position: 202 },
    { src: "images/upload/tours/6/22.webp", caption: "", position: 203 },
    { src: "images/upload/tours/6/23.jpg", caption: "", position: 204 },
    { src: "images/upload/tours/6/24.webp", caption: "", position: 205 },
    { src: "images/upload/derweze_full.jpg", caption: "", position: 206 },
    { src: "images/upload/tours/6/26.jpg", caption: "", position: 207 },
    { src: "images/upload/tours/6/27.jpg", caption: "", position: 208 },
    { src: "images/upload/tours/6/28.jpg", caption: "", position: 209 },
    { src: "images/upload/tours/6/29.jpg", caption: "", position: 210 },
    { src: "images/upload/tours/6/30.jpg", caption: "", position: 211 },
    { src: "images/upload/tours/6/31.jpg", caption: "", position: 212 },
    { src: "images/upload/tours/6/32.jpg", caption: "", position: 213 },
    { src: "images/upload/tours/6/33.jpg", caption: "", position: 214 },
    { src: "images/upload/tours/6/34.jpg", caption: "", position: 215 },
    { src: "images/upload/tours/6/35.jpg", caption: "", position: 216 },
    { src: "images/upload/tours/6/36.jpg", caption: "", position: 217 },
    { src: "images/upload/tours/6/37.jpg", caption: "", position: 218 },
    { src: "images/upload/tours/6/38.jpg", caption: "", position: 219 },
    { src: "images/upload/tours/6/39.jpg", caption: "", position: 220 },
    { src: "images/upload/tours/6/40.jpg", caption: "", position: 221 },
    { src: "images/upload/tours/6/41.jpg", caption: "", position: 222 },
    { src: "images/upload/tours/6/42.jpg", caption: "", position: 223 },
    { src: "images/upload/tours/6/43.jpg", caption: "", position: 224 },
    { src: "images/upload/tours/6/44.jpg", caption: "", position: 225 },
    { src: "images/upload/tours/6/45.jpg", caption: "", position: 226 },
    { src: "images/upload/tours/6/46.jpg", caption: "", position: 227 },
    { src: "images/upload/tours/6/47.jpg", caption: "", position: 228 },
    { src: "images/upload/tours/6/48.jpg", caption: "", position: 229 },
    { src: "images/upload/tours/2/1.jpg", caption: "", position: 230 },
    { src: "images/upload/tours/2/2.jpg", caption: "", position: 231 },
    { src: "images/upload/tours/2/3.jpg", caption: "", position: 232 },
    { src: "images/upload/tours/2/4.jpg", caption: "", position: 233 },
    { src: "images/upload/tours/2/5.jpg", caption: "", position: 234 },
    { src: "images/upload/tours/2/6.jpg", caption: "", position: 235 },
    { src: "images/upload/tours/2/7.jpg", caption: "", position: 236 },
    { src: "images/upload/tours/2/8.jpg", caption: "", position: 237 },
    { src: "images/upload/tours/2/9.jpg", caption: "", position: 238 },
    { src: "images/upload/tours/2/11.jpg", caption: "", position: 239 },
    { src: "images/upload/tours/2/12.jpg", caption: "", position: 240 },
    { src: "images/upload/tours/2/13.jpg", caption: "", position: 241 },
    { src: "images/upload/tours/2/14.jpg", caption: "", position: 242 },
    { src: "images/upload/tours/2/15.jpg", caption: "", position: 243 },
    { src: "images/upload/tours/2/16.jpg", caption: "", position: 244 },
    { src: "images/upload/tours/2/17.jpg", caption: "", position: 245 },
    { src: "images/upload/tours/2/18.jpg", caption: "", position: 246 },
    { src: "images/upload/tours/2/19.jpg", caption: "", position: 247 },
    { src: "images/upload/tours/2/20.jpg", caption: "", position: 248 },
    { src: "images/upload/tours/2/21.jpg", caption: "", position: 249 },
    { src: "images/upload/tours/2/22.jpg", caption: "", position: 250 },
    { src: "images/upload/tours/2/23.jpg", caption: "", position: 251 },
    { src: "images/upload/tours/2/24.jpg", caption: "", position: 252 },
    { src: "images/upload/tours/2/25.jpg", caption: "", position: 253 },
    { src: "images/upload/tours/2/26.jpg", caption: "", position: 254 },
    { src: "images/upload/tours/2/27.jpg", caption: "", position: 255 },
    { src: "images/upload/tours/2/28.png", caption: "", position: 256 },
    { src: "images/upload/tours/2/29.jpg", caption: "", position: 257 },
    { src: "images/upload/tours/2/30.jpg", caption: "", position: 258 },
    { src: "images/upload/tours/2/31.jpg", caption: "", position: 259 },
    { src: "images/upload/tours/2/32.jpg", caption: "", position: 260 },
    { src: "images/upload/tours/2/33.jpg", caption: "", position: 261 },
    { src: "images/upload/tours/2/34.jpg", caption: "", position: 262 },
    { src: "images/upload/tours/1/1.jpg", caption: "", position: 263 },
    { src: "images/upload/tours/1/2.jpg", caption: "", position: 264 },
    { src: "images/upload/tours/1/3.jpg", caption: "", position: 265 },
    { src: "images/upload/tours/1/4.jpg", caption: "", position: 266 },
    { src: "images/upload/tours/1/5.jpg", caption: "", position: 267 },
    { src: "images/upload/tours/1/6.jpg", caption: "", position: 268 },
    { src: "images/upload/tours/1/7.jpg", caption: "", position: 269 },
    { src: "images/upload/tours/1/8.jpg", caption: "", position: 270 },
    { src: "images/upload/tours/1/9.jpg", caption: "", position: 271 },
    { src: "images/upload/tours/1/10.jpg", caption: "", position: 272 },
    { src: "images/upload/tours/1/11.jpg", caption: "", position: 273 },
    { src: "images/upload/tours/1/12.jpg", caption: "", position: 274 },
    { src: "images/upload/tours/1/13.jpg", caption: "", position: 275 },
    { src: "images/upload/tours/1/14.jpg", caption: "", position: 276 },
    { src: "images/upload/tours/1/15.jpg", caption: "", position: 277 },
    { src: "images/upload/tours/1/16.jpg", caption: "", position: 278 },
    { src: "images/upload/tours/1/20.jpg", caption: "", position: 279 },
    { src: "images/upload/tours/1/21.jpg", caption: "", position: 280 },
    { src: "images/upload/tours/1/22.jpg", caption: "", position: 281 },
    { src: "images/upload/tours/1/23.jpg", caption: "", position: 282 },
    { src: "images/upload/tours/1/24.jpg", caption: "", position: 283 },
    { src: "images/upload/tours/1/25.jpg", caption: "", position: 284 },
    { src: "images/upload/tours/1/26.webp", caption: "", position: 285 },
    { src: "images/upload/tours/1/27.jpg", caption: "", position: 286 },
    { src: "images/upload/tours/1/28.jpg", caption: "", position: 287 },
    { src: "images/upload/tours/1/29.jpg", caption: "", position: 288 }
];

const galleryContainer = document.getElementById('gallery');

// Функция для сортировки галереи
function sortGallery(galleryArray) {
    return galleryArray.sort((a, b) => {
        // Если у обоих есть position, сортируем по position
        if (a.position !== undefined && b.position !== undefined) {
            return a.position - b.position;
        }
        // Если только у a есть position, a идет первым
        if (a.position !== undefined && b.position === undefined) {
            return -1;
        }
        // Если только у b есть position, b идет первым
        if (a.position === undefined && b.position !== undefined) {
            return 1;
        }
        // Если у обоих нет position, сохраняем оригинальный порядок
        return 0;
    });
}

document.addEventListener("DOMContentLoaded", () => {
    const sortedPhotos = sortGallery(allImages);
    sortedPhotos.forEach(e => {
        const a = document.createElement('a');
        a.href = e.src;
        a.dataset.fancybox = "gallery";
        a.dataset.caption = e.caption;
        a.loading = "lazy";
        const img = document.createElement('img');
        img.src = e.src;
        img.alt = e.caption;

        a.appendChild(img);
        galleryContainer.appendChild(a);
    });
});

</script>


<style>

.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    grid-auto-rows: 200px;
    gap: 10px;
}

.gallery a img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Картинки разного размера обрезаются аккуратно */
    border-radius: 5px;
    display: block;
}

</style>

