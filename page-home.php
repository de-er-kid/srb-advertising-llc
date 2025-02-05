<?php
/*
Template Name: Home Page
*/
get_header();
?>

    <!-- banner-->
<section class="banner" data-scroll-section>
    <div class="banslider">
                <div class="slide-item">
            <div class="container cnt">
                <h1 class="cenhead">Advertising<span></span></h1>
                <div><h4 class="cenhead1">& Branding<span></span></h4></div>
                <p>Unearth the brilliance with SRB Advertising! Dive deep into the evolution of transformative ideas and let us shape your brand's journey. Ignite your vision with us today.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1695904995_fa181f7ed660c2b69400.png" alt="banner" class="img-fluid">
        </div>
                <div class="slide-item">
            <div class="container cnt">
                <h2 class="cenhead">Evolution Of<span></span></h2>
                <div><h4 class="cenhead1">Brilliant Ideas<span></span></h4></div>
                <p>Unearth the brilliance with SRB Advertising! Dive deep into the evolution of transformative ideas and let us shape your brand's journey. Ignite your vision with us today.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1695145389_e5af2e3abba73821b24e.png" alt="banner" class="img-fluid">
        </div>
            </div>
    <a href="javascript:void(0);" class="scrolldown animel animel-right" data-scroll data-scroll-repeat>
        <svg class="arrow" viewBox="0 0 62 62" fill="none"><path class="span" d="M30.9984 61.6394C47.8983 61.6394 61.5984 47.9394 61.5984 31.0394C61.5984 14.1395 47.8983 0.439453 30.9984 0.439453C14.0985 0.439453 0.398438 14.1395 0.398438 31.0394C0.398438 47.9394 14.0985 61.6394 30.9984 61.6394Z" fill="#00ADEA"/><path d="M32.2617 23.3896C32.2617 22.9754 31.9259 22.6396 31.5117 22.6396C31.0975 22.6396 30.7617 22.9754 30.7617 23.3896L32.2617 23.3896ZM30.9814 39.22C31.2743 39.5129 31.7492 39.5129 32.042 39.22L36.815 34.447C37.1079 34.1541 37.1079 33.6792 36.815 33.3863C36.5221 33.0935 36.0473 33.0935 35.7544 33.3863L31.5117 37.629L27.2691 33.3863C26.9762 33.0935 26.5013 33.0935 26.2084 33.3863C25.9155 33.6792 25.9155 34.1541 26.2084 34.447L30.9814 39.22ZM30.7617 23.3896L30.7617 38.6896L32.2617 38.6896L32.2617 23.3896L30.7617 23.3896Z" fill="#231F20"/></svg>
        <svg class="rotate" viewBox="0 0 102 106" fill="none"><path d="M10.5737 35.6726C10.3031 36.3744 9.82784 36.9787 9.20953 37.407C8.63624 37.7936 7.9507 37.9787 7.26073 37.9332L7.11457 36.7737C7.63441 36.8331 8.15866 36.7088 8.59646 36.4223C9.03426 36.1357 9.35801 35.705 9.51159 35.2049C9.73739 34.7669 9.80618 34.2648 9.70647 33.7823C9.66482 33.5936 9.57591 33.4186 9.44807 33.2737C9.32024 33.1289 9.15768 33.0188 8.97567 32.954C8.80855 32.87 8.62205 32.832 8.43536 32.844C8.24868 32.8559 8.06857 32.9175 7.91357 33.0222C7.45198 33.3788 7.03632 33.7912 6.67609 34.25L6.08171 34.9223C5.89734 35.1152 5.70215 35.2973 5.49707 35.468C5.30026 35.6498 5.07258 35.795 4.82473 35.8967C4.59464 35.9703 4.35498 36.0097 4.11342 36.0136C3.81593 36.0099 3.52176 35.9505 3.24621 35.8382C2.9224 35.713 2.63084 35.5167 2.39305 35.2637C2.15526 35.0107 1.9773 34.7076 1.87231 34.3767C1.66869 33.6866 1.72058 32.9463 2.01847 32.2914C2.25134 31.6834 2.67094 31.1649 3.21698 30.8104C3.73741 30.4734 4.34131 30.2878 4.96115 30.2744L5.10731 31.4047C4.66935 31.3782 4.23453 31.4937 3.86757 31.7343C3.50062 31.9748 3.22116 32.3274 3.07082 32.7396C2.88431 33.1139 2.83932 33.5431 2.94415 33.9479C2.99259 34.1249 3.08233 34.2878 3.20599 34.4233C3.32964 34.5588 3.48368 34.663 3.65546 34.7274C3.80533 34.8076 3.97268 34.8495 4.14266 34.8495C4.31263 34.8495 4.47998 34.8076 4.62985 34.7274C5.05745 34.4168 5.44095 34.0497 5.7699 33.6361L6.14017 33.2366C6.20838 33.1489 6.3253 33.0222 6.48121 32.8566C6.59374 32.729 6.71415 32.6086 6.84174 32.496L7.19252 32.194C7.31678 32.0962 7.45064 32.0114 7.59203 31.9407L7.99153 31.7847C8.13296 31.737 8.28077 31.7107 8.43 31.7068C8.58376 31.71 8.73697 31.7264 8.88797 31.7555C9.06157 31.7861 9.23143 31.8351 9.39466 31.9017C9.72602 32.0271 10.0236 32.228 10.2638 32.4885C10.5039 32.749 10.6801 33.0618 10.7783 33.4023C10.9725 34.1601 10.9003 34.9617 10.5737 35.6726Z" fill="#231F20"/><path d="M15.8057 26.5521C15.457 27.0609 15.007 27.4923 14.4839 27.8193C13.9608 28.1462 13.3758 28.3617 12.7656 28.4521C12.168 28.5457 11.5577 28.5171 10.9715 28.368C10.3853 28.219 9.83546 27.9526 9.35518 27.5849C8.85899 27.2379 8.43827 26.7939 8.1184 26.2797C7.79853 25.7656 7.58615 25.192 7.49408 24.5935C7.39675 23.9854 7.42522 23.3638 7.57774 22.7671C7.73025 22.1705 8.00357 21.6115 8.38078 21.1247C8.84024 20.489 9.45846 19.985 10.1737 19.6631C10.8648 19.3452 11.63 19.2238 12.3856 19.3123L12.2589 20.4913C11.7103 20.4078 11.1493 20.4821 10.6414 20.7057C10.1083 20.9413 9.64756 21.3146 9.30646 21.7872C9.02032 22.1509 8.8121 22.5695 8.69476 23.0171C8.57741 23.4647 8.55346 23.9317 8.62438 24.3889C8.69806 24.8391 8.86208 25.2697 9.10656 25.6549C9.35105 26.04 9.67095 26.3717 10.047 26.63C10.4062 26.9066 10.8171 27.1086 11.2556 27.224C11.694 27.3395 12.1511 27.3661 12.5999 27.3023C13.0588 27.2319 13.4982 27.0675 13.8905 26.8193C14.2829 26.5711 14.6197 26.2446 14.88 25.8602C15.2258 25.3922 15.441 24.8407 15.5036 24.2622C15.5767 23.7152 15.4851 23.1589 15.2405 22.6642L16.3124 22.177C16.6264 22.8692 16.7444 23.6343 16.6534 24.3889C16.5677 25.1724 16.2751 25.919 15.8057 26.5521Z" fill="#231F20"/><path d="M24.3592 17.6274L20.6565 16.3119L19.0488 17.6663L21.2412 20.2582L20.3447 21.0183L14.625 14.2462L17.3338 11.9564C17.6079 11.7196 17.9269 11.5405 18.2718 11.43C18.6168 11.3195 18.9804 11.2798 19.3411 11.3133C19.7037 11.3361 20.0575 11.4346 20.3797 11.6024C20.7019 11.7702 20.9854 12.0036 21.2119 12.2877C21.5817 12.7156 21.8008 13.253 21.8355 13.8175C21.8841 14.3809 21.7582 14.9455 21.475 15.435L25.3726 16.7991L24.3592 17.6274ZM16.2328 14.3242L18.3667 16.8479L20.1791 15.3278C20.3408 15.1923 20.4721 15.0241 20.5645 14.8344C20.6568 14.6447 20.7081 14.4376 20.715 14.2267C20.7314 14.0119 20.7046 13.796 20.6359 13.5918C20.5673 13.3876 20.4583 13.1992 20.3155 13.038C20.1806 12.8707 20.0138 12.7321 19.8247 12.63C19.6357 12.528 19.4282 12.4646 19.2144 12.4436C19.0058 12.4156 18.7936 12.4324 18.592 12.4929C18.3903 12.5534 18.2039 12.6562 18.0451 12.7944L16.2328 14.3242Z" fill="#231F20"/><path d="M34.1131 10.6982C33.9242 11.2761 33.6181 11.8089 33.2141 12.2632C32.8101 12.7176 32.3167 13.0837 31.7648 13.3389C31.2269 13.6157 30.6373 13.7777 30.0335 13.8146C29.4296 13.8515 28.8246 13.7625 28.257 13.5532C27.6822 13.3657 27.1526 13.0611 26.7014 12.6586C26.2503 12.2561 25.8875 11.7644 25.6359 11.2147C25.3584 10.6755 25.1945 10.0852 25.1543 9.48013C25.1141 8.8751 25.1984 8.26826 25.402 7.69711C25.5905 7.12163 25.8954 6.59106 26.2977 6.13846C26.7 5.68585 27.1912 5.32088 27.7406 5.06623C28.2812 4.79255 28.8717 4.63156 29.4764 4.59303C30.081 4.55451 30.6872 4.63925 31.2582 4.84211C31.8332 5.03429 32.3631 5.34163 32.8154 5.74537C33.2677 6.14912 33.633 6.6408 33.889 7.19041C34.163 7.72913 34.3242 8.31809 34.3627 8.92124C34.4012 9.52439 34.3163 10.129 34.1131 10.6982ZM28.637 12.4814C29.063 12.6313 29.515 12.693 29.9656 12.6629C30.4162 12.6327 30.8559 12.5113 31.2582 12.306C31.6695 12.1187 32.0382 11.8491 32.3415 11.514C32.6448 11.1789 32.8763 10.7852 33.0218 10.3572C33.1684 9.9282 33.2267 9.47399 33.1932 9.02187C33.1597 8.56974 33.0351 8.12907 32.8269 7.72634C32.6384 7.31355 32.3687 6.94292 32.0339 6.63657C31.6991 6.33022 31.306 6.09441 30.8781 5.94318C30.4514 5.78844 29.9972 5.72413 29.5443 5.75433C29.0914 5.78452 28.6497 5.90858 28.2473 6.11859C27.8358 6.30404 27.4673 6.57304 27.1654 6.90854C26.8634 7.24403 26.6346 7.63869 26.4934 8.06739C26.3443 8.4976 26.2846 8.95373 26.3181 9.40781C26.3517 9.86189 26.4776 10.3043 26.6882 10.708C26.8778 11.119 27.148 11.4877 27.4828 11.7923C27.8175 12.097 28.21 12.3313 28.637 12.4814Z" fill="#231F20"/><path d="M40.107 8.95486L43.8486 8.11689L44.0825 9.20822L39.2105 10.2995L37.2617 1.64688L38.4115 1.39355L40.107 8.95486Z" fill="#231F20"/><path d="M48.5457 7.71722L52.3654 7.59054V8.71109L47.3667 8.867L47.1523 0H48.3216L48.5457 7.71722Z" fill="#231F20"/><path d="M67.0374 2.41652C67.5807 2.57293 68.0835 2.84569 68.5109 3.21586C68.9383 3.58603 69.28 4.04476 69.5124 4.5602C69.9749 5.62479 70.0321 6.82181 69.6731 7.92564C69.3142 9.02947 68.5638 9.96387 67.5636 10.5527C67.0753 10.8357 66.5314 11.0093 65.9695 11.0614C65.4076 11.1136 64.8411 11.0431 64.3091 10.8548L61.0156 9.79272L63.7147 1.3252L67.0374 2.41652ZM64.6891 9.79272C65.0809 9.93218 65.4984 9.98439 65.9124 9.94568C66.3264 9.90697 66.727 9.77826 67.0861 9.56859C67.8206 9.10782 68.3695 8.4033 68.6368 7.57846C68.904 6.75363 68.8725 5.86106 68.5477 5.05713C68.3781 4.67667 68.127 4.33812 67.8121 4.06536C67.4973 3.7926 67.1264 3.59229 66.7256 3.47861L64.5527 2.77704L62.487 9.12038L64.6891 9.79272Z" fill="#231F20"/><path d="M78.2459 16.6523C77.0526 16.8983 75.8105 16.6639 74.7889 15.9999C73.7674 15.3359 73.0489 14.2958 72.7893 13.1055C72.5497 11.9046 72.7926 10.6577 73.4656 9.63461C74.1385 8.61155 75.1872 7.89466 76.3848 7.6391C77.5792 7.396 78.8213 7.63285 79.8424 8.29841C80.8636 8.96397 81.5817 10.0047 81.8414 11.1956C82.0898 12.3905 81.8552 13.6352 81.1888 14.6576C80.5223 15.68 79.4783 16.3972 78.2849 16.6523H78.2459ZM73.9098 12.8716C74.0488 13.5396 74.3844 14.1508 74.8735 14.6265C75.3625 15.1023 75.9827 15.4209 76.6543 15.5414C77.3259 15.6618 78.0182 15.5787 78.6421 15.3026C79.2661 15.0266 79.7932 14.5702 80.1557 13.9922C80.4149 13.6167 80.5952 13.1925 80.6856 12.7453C80.776 12.2981 80.7748 11.8372 80.6819 11.3905C80.4832 10.5 79.9434 9.72277 79.1784 9.2255C78.4134 8.72823 77.4839 8.55049 76.5894 8.73042C75.7005 8.94463 74.9274 9.4912 74.429 10.2578C73.9307 11.0244 73.7449 11.9527 73.9098 12.8521V12.8716Z" fill="#231F20"/><path d="M82.2305 21.6706L87.4045 14.0508L88.2035 15.0252L83.9357 21.2906L90.9026 18.2212L91.6724 19.1274L87.4922 25.4805L94.3715 22.3234L95.1218 23.2199L86.7517 27.0492L85.8747 26.0066L89.938 19.8095L83.1172 22.7814L82.2305 21.6706Z" fill="#231F20"/><path d="M100.147 33.3824L100.615 34.4543L92.5077 38.04L92.1277 37.1728L96.3371 30.3521L90.2763 33.0316L89.8086 31.9598L97.9156 28.374L98.2859 29.2022L94.0472 36.101L100.147 33.3824Z" fill="#231F20"/><path d="M2.56411 74.9213C2.23595 74.2473 2.11393 73.4915 2.21333 72.7484C2.32929 72.0589 2.67223 71.4279 3.18772 70.9555L4.16212 71.6376C3.76506 71.9787 3.49992 72.4481 3.41271 72.9642C3.3255 73.4804 3.42171 74.0107 3.68467 74.4634C3.8569 74.9258 4.17946 75.317 4.6006 75.5742C4.77295 75.6608 4.96314 75.7058 5.15601 75.7058C5.34887 75.7058 5.53907 75.6608 5.71142 75.5742C5.88549 75.5047 6.03828 75.3907 6.15455 75.2436C6.27081 75.0966 6.34648 74.9216 6.37401 74.7362C6.42845 74.1579 6.4088 73.5751 6.31554 73.0018L6.22785 72.1053C6.21223 71.8392 6.21223 71.5724 6.22785 71.3063C6.23613 71.0405 6.28543 70.7776 6.37401 70.5268C6.47457 70.3057 6.6094 70.1018 6.77351 69.9227C6.97082 69.7015 7.21341 69.5254 7.48482 69.4062C7.79637 69.2502 8.14001 69.1689 8.48845 69.1689C8.83689 69.1689 9.18053 69.2502 9.49208 69.4062C10.136 69.7205 10.6447 70.2569 10.9244 70.9166C11.2078 71.5036 11.303 72.1637 11.1973 72.8069C11.0947 73.4192 10.8211 73.9901 10.408 74.4536L9.43362 73.791C9.75216 73.4898 9.965 73.0938 10.0405 72.662C10.116 72.2301 10.0501 71.7854 9.85261 71.394C9.69185 71.0076 9.4074 70.6854 9.04385 70.4781C8.87873 70.3965 8.69701 70.354 8.51281 70.354C8.32861 70.354 8.14689 70.3965 7.98176 70.4781C7.81922 70.5359 7.67495 70.6358 7.56367 70.7676C7.4524 70.8994 7.37811 71.0584 7.3484 71.2284C7.27145 71.7485 7.27145 72.2771 7.3484 72.7972C7.3484 73.0505 7.3484 73.2356 7.3484 73.3428C7.3484 73.45 7.3484 73.6254 7.39712 73.8495C7.40988 74.0214 7.40988 74.194 7.39712 74.3659C7.39712 74.4731 7.39712 74.629 7.39712 74.8239C7.38952 74.9831 7.36001 75.1405 7.30943 75.2916C7.30943 75.3988 7.22173 75.5352 7.15352 75.6911C7.09671 75.8319 7.01409 75.9607 6.90992 76.0711C6.80477 76.181 6.6907 76.2821 6.56888 76.3732C6.43009 76.4778 6.27969 76.5661 6.12066 76.6363C5.80362 76.7972 5.45309 76.881 5.09754 76.881C4.742 76.881 4.39147 76.7972 4.07443 76.6363C3.38824 76.2559 2.85466 75.6501 2.56411 74.9213Z" fill="#231F20"/><path d="M8.98213 85.4543C8.58959 84.9783 8.30028 84.4258 8.13254 83.832C7.9648 83.2382 7.9223 82.616 8.00773 82.0049C8.08816 81.4054 8.28833 80.8282 8.59633 80.3077C8.90434 79.7871 9.31388 79.3337 9.80062 78.9746C10.2708 78.5917 10.8136 78.308 11.3964 78.1405C11.9792 77.9731 12.5898 77.9253 13.1915 78.0002C13.8024 78.0762 14.391 78.2772 14.9208 78.5907C15.4505 78.9042 15.91 79.3234 16.2706 79.8223C16.7581 80.4387 17.0681 81.1766 17.1671 81.9562C17.279 82.7046 17.1846 83.4694 16.8942 84.1681L15.7932 83.7199C16.0315 83.2164 16.1162 82.6538 16.0368 82.1024C15.9579 81.5256 15.7257 80.9805 15.3644 80.5239C15.0956 80.147 14.7499 79.8314 14.3502 79.5979C13.9504 79.3644 13.5057 79.2184 13.0454 79.1695C12.5925 79.111 12.1324 79.1456 11.6934 79.2713C11.2545 79.397 10.8458 79.611 10.4924 79.9003C10.1247 80.1729 9.81594 80.5173 9.58484 80.9125C9.35374 81.3077 9.20506 81.7456 9.14777 82.1998C9.08882 82.658 9.1241 83.1233 9.25145 83.5673C9.37879 84.0114 9.59551 84.4247 9.88831 84.782C10.2374 85.2518 10.7095 85.6159 11.2525 85.8343C11.7574 86.0564 12.3168 86.1242 12.8602 86.0292L13.0259 87.1985C12.2757 87.3058 11.5105 87.2046 10.814 86.9062C10.0827 86.5978 9.44942 86.0958 8.98213 85.4543Z" fill="#231F20"/><path d="M19.1843 95.286L19.7982 91.3884L18.1807 90.0633L16.0273 92.6844L15.1211 91.9438L20.7336 85.123L23.4814 87.3739C23.7601 87.601 23.9901 87.882 24.1575 88.2002C24.325 88.5183 24.4264 88.867 24.4558 89.2253C24.5002 89.5865 24.4695 89.953 24.3655 90.3017C24.2616 90.6505 24.0866 90.974 23.8517 91.252C23.4989 91.6898 23.0132 92.0011 22.4681 92.1387C21.9192 92.2855 21.3391 92.2651 20.8018 92.0803L20.1782 96.1435L19.1843 95.286ZM20.948 86.7016L18.892 89.2545L20.7239 90.7551C20.8847 90.8923 21.0735 90.9929 21.277 91.0501C21.4806 91.1073 21.6941 91.1197 21.9029 91.0864C22.3365 91.0348 22.7322 90.8142 23.004 90.4725C23.1436 90.3079 23.2492 90.1172 23.3144 89.9114C23.3797 89.7057 23.4033 89.489 23.384 89.274C23.3696 89.0644 23.312 88.8601 23.2147 88.674C23.1174 88.4878 22.9827 88.3239 22.8188 88.1924L20.948 86.7016Z" fill="#231F20"/><path d="M31.559 100.967C30.9893 101.179 30.3819 101.271 29.775 101.238C29.168 101.204 28.5745 101.046 28.0316 100.772C27.4878 100.517 27.0016 100.154 26.6029 99.7054C26.2041 99.2564 25.9012 98.7307 25.7126 98.1606C25.5087 97.5923 25.4217 96.9886 25.4568 96.3858C25.492 95.783 25.6486 95.1936 25.9172 94.6528C26.1682 94.1016 26.528 93.6068 26.9751 93.1982C27.4222 92.7896 27.9473 92.4757 28.5188 92.2753C29.0878 92.0679 29.693 91.9782 30.2976 92.0117C30.9023 92.0452 31.4938 92.2012 32.0364 92.4701C32.5887 92.7203 33.0837 93.0812 33.491 93.5304C33.8983 93.9795 34.2091 94.5074 34.4042 95.0815C34.6121 95.6503 34.7021 96.2556 34.6686 96.8603C34.6351 97.4651 34.4788 98.0567 34.2093 98.5991C33.9533 99.1542 33.5859 99.6509 33.13 100.058C32.6741 100.465 32.1394 100.775 31.559 100.967ZM26.7649 97.7903C26.9094 98.2203 27.1417 98.6155 27.4469 98.951C27.7522 99.2865 28.1239 99.5548 28.5383 99.7391C28.9421 99.946 29.3845 100.067 29.8374 100.093C30.2903 100.12 30.7438 100.053 31.1692 99.895C31.599 99.7447 31.9936 99.5081 32.3288 99.1998C32.6639 98.8915 32.9324 98.518 33.118 98.1021C33.3283 97.698 33.4524 97.2547 33.4826 96.8002C33.5128 96.3457 33.4484 95.8898 33.2934 95.4615C33.1479 95.0321 32.9152 94.6374 32.6101 94.302C32.3049 93.9667 31.9338 93.698 31.52 93.5127C31.1173 93.3078 30.6767 93.1882 30.2257 93.1614C29.7747 93.1346 29.323 93.2011 28.8989 93.3568C28.4689 93.5098 28.0746 93.7484 27.7396 94.0582C27.4046 94.3681 27.136 94.7427 26.9501 95.1594C26.7445 95.5632 26.6222 96.0042 26.5904 96.4561C26.5586 96.9081 26.618 97.3618 26.7649 97.7903Z" fill="#231F20"/><path d="M38.6922 103.208L42.4242 104.036L42.1806 105.128L37.3086 104.046L39.2574 95.3936L40.4072 95.6469L38.6922 103.208Z" fill="#231F20"/><path d="M48.1263 104.612L51.9557 104.748V105.869L46.957 105.683L47.1519 96.8164H48.3309L48.1263 104.612Z" fill="#231F20"/><path d="M63.7173 95.0133C64.2534 94.8361 64.8212 94.7757 65.3825 94.8363C65.9438 94.8968 66.4857 95.0767 66.9718 95.3641C67.9635 95.9676 68.699 96.9144 69.0385 98.0245C69.378 99.1347 69.2979 100.331 68.8134 101.386C68.5723 101.896 68.2251 102.348 67.7948 102.713C67.3646 103.078 66.8614 103.346 66.3189 103.5L63.006 104.475L60.4141 95.9974L63.7173 95.0133ZM65.9876 102.428C66.3906 102.321 66.7648 102.125 67.0832 101.855C67.4016 101.586 67.6564 101.249 67.8292 100.869C68.1704 100.072 68.2186 99.1803 67.9654 98.3511C67.7122 97.5219 67.1738 96.809 66.4456 96.3385C66.087 96.1283 65.6877 95.9969 65.2744 95.9532C64.8611 95.9095 64.4432 95.9545 64.0486 96.0851L61.8659 96.7477L63.8147 103.101L65.9876 102.428Z" fill="#231F20"/><path d="M80.9325 95.1503C80.7995 95.7438 80.5469 96.304 80.1901 96.7966C79.8332 97.2891 79.3796 97.7037 78.857 98.015C78.3493 98.3439 77.7789 98.5639 77.1819 98.6612C76.5848 98.7585 75.974 98.7309 75.3882 98.5802C74.2413 98.2608 73.2625 97.5101 72.6568 96.4852C72.0511 95.4603 71.8654 94.2408 72.1387 93.0821C72.412 91.9234 73.1231 90.9154 74.123 90.2692C75.1228 89.6231 76.3339 89.3889 77.5026 89.6157C78.0938 89.745 78.6517 89.9954 79.1414 90.3509C79.631 90.7064 80.0418 91.1594 80.3479 91.6814C80.6758 92.1896 80.8967 92.7593 80.9973 93.3557C81.0978 93.9521 81.0757 94.5627 80.9325 95.1503ZM75.661 97.4693C76.5546 97.6653 77.4893 97.5024 78.2639 97.0158C79.0385 96.5292 79.5909 95.7577 79.8022 94.8677C79.9922 93.9726 79.8299 93.0386 79.349 92.2601C78.8681 91.4815 78.1056 90.9183 77.2201 90.6876C76.7798 90.5756 76.321 90.5567 75.873 90.6322C75.425 90.7077 74.9977 90.8759 74.6184 91.126C74.2293 91.356 73.8911 91.6631 73.6247 92.0284C73.3583 92.3936 73.1693 92.8094 73.0691 93.2502C72.8844 94.1463 73.0502 95.0791 73.5323 95.8567C74.0144 96.6343 74.7763 97.1974 75.661 97.4304V97.4693Z" fill="#231F20"/><path d="M87.9504 90.8627L79.707 86.7605L80.5353 85.8446L87.3561 89.2258L83.3805 82.7362L84.1795 81.8496L91.0003 85.1235L86.9371 78.7315L87.7263 77.8545L92.6568 85.6497L91.7408 86.6728L85.0467 83.4865L88.9443 89.8006L87.9504 90.8627Z" fill="#231F20"/><path d="M91.5258 70.273L92.0423 69.2109L100.003 73.1085L99.5841 73.966L91.6233 75.1255L97.5671 78.0487L97.0507 79.1108L89.0898 75.2132L89.4893 74.3947L97.4989 73.2059L91.5258 70.273Z" fill="#231F20"/><path d="M2.7478 55.4917C4.26537 55.4917 5.4956 54.2615 5.4956 52.7439C5.4956 51.2263 4.26537 49.9961 2.7478 49.9961C1.23023 49.9961 0 51.2263 0 52.7439C0 54.2615 1.23023 55.4917 2.7478 55.4917Z" fill="#231F20"/><path d="M99.2517 55.4917C100.769 55.4917 102 54.2615 102 52.7439C102 51.2263 100.769 49.9961 99.2517 49.9961C97.7341 49.9961 96.5039 51.2263 96.5039 52.7439C96.5039 54.2615 97.7341 55.4917 99.2517 55.4917Z" fill="#231F20"/></svg>
    </a>
</section>
<!-- banner -->

<!-- about -->
<section class="about" id="about" data-scroll-section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2 position-relative">
                <div class="abimg abimg1" data-scroll data-scroll-repeat><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1694715807_a3480a28fa18d28103ac.jpg" alt="about" class="img-fluid w-100"></div>
                <div class="abimg abimg2" data-scroll data-scroll-repeat><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1694716603_3f2ad3d3f72d3bc5828e.jpg" alt="about" class="img-fluid w-100"></div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1 mb-lg-0 mb-md-5 mb-4">
                <div class="abcnt">
                    <h5 class="sechead" data-scroll data-scroll-repeat><span class="headcnt">ABOUT US</span></h5>
                    <h2 data-scroll data-scroll-repeat class="sechead2 splitline splitline1">What Makes Us Unique ?</h2>
                    <div class="secpara" data-scroll data-scroll-repeat><p>At SRB Advertising, our distinctiveness stems from an unparalleled blend of creativity, strategy, and passion. We don&#39;t just create advertisements; we craft stories that resonate, engage, and leave an indelible mark. Our commitment to understanding your brand and audience sets us apart, ensuring that every campaign is tailored, impactful, and unforgettable. Dive in to discover the SRB difference.</p>
</div>
                    <a href="about-us.html" class="link-srb animel animel-left" data-scroll data-scroll-repeat>
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_b_221_272)"><circle cx="25" cy="25" r="25" fill="white"/></g><path d="M17 24C16.4477 24 16 24.4477 16 25C16 25.5523 16.4477 26 17 26L17 24ZM32.7071 25.7071C33.0976 25.3166 33.0976 24.6834 32.7071 24.2929L26.3431 17.9289C25.9526 17.5384 25.3195 17.5384 24.9289 17.9289C24.5384 18.3195 24.5384 18.9526 24.9289 19.3431L30.5858 25L24.9289 30.6569C24.5384 31.0474 24.5384 31.6805 24.9289 32.0711C25.3195 32.4616 25.9526 32.4616 26.3431 32.0711L32.7071 25.7071ZM17 26L32 26L32 24L17 24L17 26Z" fill="#FB008D"/><defs><filter id="filter0_b_221_272" x="-25" y="-25" width="100" height="100" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feGaussianBlur in="BackgroundImageFix" stdDeviation="12.5"/><feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_221_272"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_221_272" result="shape"/></filter></defs></svg>
                        <span>Learn More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about -->
<!-- services -->
<section class="services" data-scroll-section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="servmc">
                    <h5 class="sechead clr" data-scroll data-scroll-repeat><span class="headcnt">OUR SERVICES</span></h5>
                    <h2 class="sechead2 splitline splitline2 clr" data-scroll data-scroll-repeat>We Believe In Professionalism And Creative Transformation</h2>
                    <div class="secpara clr" data-scroll data-scroll-repeat><p>Where professionalism seamlessly fuses with creativity, that&#39;s our ethos. We elevate and transform every idea into powerful narratives. Every project for us is a new canvas, awaiting our unique touch. Choose to journey with us and immerse in a world where expertise and imagination converge.</p>
</div>
                </div>
            </div>
            <div class="col-lg-6">
                                    <div class="row servlist">
                                            <div class="col-6">
                            <a href="what-we-do/branding.html" class="servitem" data-scroll>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698053418_ccf3a7f114a80e170565.png" alt="service-image" class="img-fluid servimg">
                                <div class="servcnt">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1694700735_2b5b386fb3f4b5dc5019.svg" alt="service-icon" class="img-fluid servico">
                                    <h4>Branding</h4>
                                    <p>Shaping identities that resonate. Turn your vision into a memorable brand.
</p>
                                </div>
                            </a>
                        </div>
                                            <div class="col-6">
                            <a href="what-we-do/advertising.html" class="servitem" data-scroll>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698053435_97bc0acc786638344eb0.png" alt="service-image" class="img-fluid servimg">
                                <div class="servcnt">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1694708152_36b399936d5ddf6b3a1b.svg" alt="service-icon" class="img-fluid servico">
                                    <h4>Advertising</h4>
                                    <p>Amplifying messages that matter. Elevate your brand with impactful advertising.
</p>
                                </div>
                            </a>
                        </div>
                                            <div class="col-6">
                            <a href="what-we-do/signages.html" class="servitem" data-scroll>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698053451_948783fb88269390b0bf.png" alt="service-image" class="img-fluid servimg">
                                <div class="servcnt">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1694708175_079b7e9a8a8d5a72de3b.svg" alt="service-icon" class="img-fluid servico">
                                    <h4>Signages</h4>
                                    <p>Guiding attention with clarity. Make your mark with standout signage.
</p>
                                </div>
                            </a>
                        </div>
                                            <div class="col-6">
                            <a href="what-we-do/digital.html" class="servitem" data-scroll>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698053470_b47be01d34746ef91e78.png" alt="service-image" class="img-fluid servimg">
                                <div class="servcnt">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1694708201_6801a5e0df20e4405161.svg" alt="service-icon" class="img-fluid servico">
                                    <h4>Digital</h4>
                                    <p>Mastering the digital domain. Connect and elevate effortlessly.
</p>
                                </div>
                            </a>
                        </div>
                                        </div>
                            </div>
        </div>
    </div>
    <div class="scrolltxt animel animel-top" data-scroll data-scroll-repeat><span>Advertising . Branding . Signages . Digital</span> <span>. Advertising . Branding . Signages . Digital</span> <span>. Advertising . Branding . Signages . Digital</span></div>
</section><!-- services -->
<!-- portfolio -->
<section class="portfolio secpad" data-scroll-section>
    <div class="container">
        <h5 class="sechead clr" data-scroll data-scroll-repeat><span class="headcnt">OUR PORTFOLIO</span></h5>
                    <ul class="list-inline portmenu animlist" data-scroll data-scroll-repeat>
                <li class="list-inline-item"><a href="javascript:void(0);" class="filter active" data-filter=".all">All</a></li>
                            <li class="list-inline-item"><a href="javascript:void(0);" class="filter" data-filter=".pcat1">Branding</a></li>
                            <li class="list-inline-item"><a href="javascript:void(0);" class="filter" data-filter=".pcat2">Signages</a></li>
                            <li class="list-inline-item"><a href="javascript:void(0);" class="filter" data-filter=".pcat3">Advertising</a></li>
                            <li class="list-inline-item"><a href="javascript:void(0);" class="filter" data-filter=".pcat4">Digital</a></li>
                        </ul>
                            <div class="row lightgallery overflow-hidden" id="portfolio">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697886827_0ab0814541d4fae51e0f.png" class="col-lg-3 col-md-4 col-6 galgrid all pcat1">
                    <div class="galitem">
                        <span data-scroll></span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697886827_0ab0814541d4fae51e0f.png" alt="Posters" class="img-fluid">
                        <div class="galcnt">
                            <div>
                                <h4>Posters</h4>
                                <p>Branding</p>
                            </div>
                            <i class="bi bi-plus"></i>
                        </div>
                    </div>
                </a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697886182_cb4ba71b100ecfe9c9c5.png" class="col-lg-3 col-md-4 col-6 galgrid all pcat2">
                    <div class="galitem">
                        <span data-scroll></span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697886182_cb4ba71b100ecfe9c9c5.png" alt="Signs" class="img-fluid">
                        <div class="galcnt">
                            <div>
                                <h4>Signs</h4>
                                <p>Signages</p>
                            </div>
                            <i class="bi bi-plus"></i>
                        </div>
                    </div>
                </a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038279_5467493fcdd7fd8cd250.png" class="col-lg-3 col-md-4 col-6 galgrid all pcat1">
                    <div class="galitem">
                        <span data-scroll></span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038279_5467493fcdd7fd8cd250.png" alt="Vehicle Graphics" class="img-fluid">
                        <div class="galcnt">
                            <div>
                                <h4>Vehicle Graphics</h4>
                                <p>Branding</p>
                            </div>
                            <i class="bi bi-plus"></i>
                        </div>
                    </div>
                </a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038297_0ad78e7a4116402d3096.png" class="col-lg-3 col-md-4 col-6 galgrid all pcat1">
                    <div class="galitem">
                        <span data-scroll></span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038297_0ad78e7a4116402d3096.png" alt="Kiosk" class="img-fluid">
                        <div class="galcnt">
                            <div>
                                <h4>Kiosk</h4>
                                <p>Branding</p>
                            </div>
                            <i class="bi bi-plus"></i>
                        </div>
                    </div>
                </a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697887320_1afc96fb2a5bb7f740d6.png" class="col-lg-3 col-md-4 col-6 galgrid all pcat1">
                    <div class="galitem">
                        <span data-scroll></span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697887320_1afc96fb2a5bb7f740d6.png" alt="Vehicle Graphics" class="img-fluid">
                        <div class="galcnt">
                            <div>
                                <h4>Vehicle Graphics</h4>
                                <p>Branding</p>
                            </div>
                            <i class="bi bi-plus"></i>
                        </div>
                    </div>
                </a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038384_ffd24a8ce9b9739e6252.png" class="col-lg-3 col-md-4 col-6 galgrid all pcat3">
                    <div class="galitem">
                        <span data-scroll></span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038384_ffd24a8ce9b9739e6252.png" alt="Brochure" class="img-fluid">
                        <div class="galcnt">
                            <div>
                                <h4>Brochure</h4>
                                <p>Advertising</p>
                            </div>
                            <i class="bi bi-plus"></i>
                        </div>
                    </div>
                </a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038402_70145c41cbb1347f7342.png" class="col-lg-3 col-md-4 col-6 galgrid all pcat1">
                    <div class="galitem">
                        <span data-scroll></span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038402_70145c41cbb1347f7342.png" alt="Corporate Branding" class="img-fluid">
                        <div class="galcnt">
                            <div>
                                <h4>Corporate Branding</h4>
                                <p>Branding</p>
                            </div>
                            <i class="bi bi-plus"></i>
                        </div>
                    </div>
                </a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697887181_6286488fde76b168c5f4.png" class="col-lg-3 col-md-4 col-6 galgrid all pcat1">
                    <div class="galitem">
                        <span data-scroll></span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697887181_6286488fde76b168c5f4.png" alt="Flyers" class="img-fluid">
                        <div class="galcnt">
                            <div>
                                <h4>Flyers</h4>
                                <p>Branding</p>
                            </div>
                            <i class="bi bi-plus"></i>
                        </div>
                    </div>
                </a>
                        </div>
            </div>
</section>
<!-- portfolio -->

<!-- testimonials -->
<section class="testimonials secpad" data-scroll-section>
    <div class="container">
        <div class="text-center"><h5 class="sechead text-white" data-scroll data-scroll-repeat><span class="headcnt">HAPPY CUSTOMERS</span></h5></div>
        <div class="row align-items-center">
            <div class="col-lg-6 d-lg-block d-none position-relative">
                <div class="svgrnd animel animel-left" data-scroll><svg width="323" height="325" viewBox="0 0 323 325" fill="none"><path d="M303.397 238.04C315.273 215.499 322 189.79 322 162.5C322 73.306 250.142 1 161.5 1C109.916 1 64.0159 25.4865 34.6532 63.5381M284.134 266.694C254.693 301.743 210.679 324 161.5 324C72.8583 324 1 251.694 1 162.5C1 140.335 6.17742 113.008 16.5323 92.1694" stroke="white" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                <img data-scroll src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1694716551_93e7f38dee3c59792bd5.png" alt="testimonials" class="img-fluid tstimg1">
                <img data-scroll src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1694716551_13548bdd431f9da1a0b4.png" alt="testimonials" class="img-fluid tstimg2 animel animel-right">
            </div>
            <div class="col-lg-6">
                                <div class="testislider">
                                        <div class="slide-item">
                        <p>Before partnering with SRB Advertising, our brand lacked direction and impact. SRB's branding service not only gave our business a distinctive identity but breathed life into our core values and vision. Now, we stand out in a crowded marketplace with an image that resonates deeply with our audience. Their expertise is unmatched, and their commitment to understanding our essence was truly commendable.</p>
                        <div class="d-flex align-items-center tstauth">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/profile.svg" alt="client-image" class="img-fluid">
                            <div>
                                <h4>Mathews Abraham</h4>
                                <span>MD</span>
                            </div>
                        </div>
                    </div>
                                        <div class="slide-item">
                        <p>SRB Advertising transformed the way our customers perceive our physical presence. With their signage service, our brand became a landmark, capturing attention and sparking interest like never before. The blend of innovative design and strategic placement was sheer brilliance. Now, we don't just have a sign, we have a statement. Thank you, SRB!</p>
                        <div class="d-flex align-items-center tstauth">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/profile.svg" alt="client-image" class="img-fluid">
                            <div>
                                <h4>Shinu Roy</h4>
                                <span>CEO</span>
                            </div>
                        </div>
                    </div>
                                        <div class="slide-item">
                        <p>In the vast digital landscape, SRB Advertising has been our guiding star. Their digital services have revamped our online presence, making us both discoverable and memorable. The surge in engagement and conversions is a testament to their expertise. With SRB, we found a partner who truly understands the pulse of the digital age. Highly recommended!</p>
                        <div class="d-flex align-items-center tstauth">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/profile.svg" alt="client-image" class="img-fluid">
                            <div>
                                <h4>Rami Ahmed</h4>
                                <span>Manager</span>
                            </div>
                        </div>
                    </div>
                                    </div>
                            </div>
        </div>
    </div>
</section>
<!-- testimonials -->
<!-- cta -->
<section class="cta secpad" data-scroll-section>
    <div class="container">
        <div class="col-lg-6 mx-auto px-0 text-center">
            <h5 class="sechead clr" data-scroll data-scroll-repeat><span class="headcnt">WORK WITH US</span></h5>
            <h2 data-scroll data-scroll-repeat class="sechead2 splitline splitline3">We would love to hear more about your project.</h2>
        </div>
        <form action="https://www.srbadvertisingllc.com/contact" method="post" id="cntform">
            <div class="row">
                <div class="col-12 error"></div>
                <div class="col-lg-4 mb-lg-0 mb-3 animel animel-left delay1" data-scroll data-scroll-repeat>
                    <input type="text" placeholder="Name" name="name" class="form-control" required>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-3 animel animel-bottom delay1" data-scroll data-scroll-repeat>
                    <input type="number" placeholder="Mobile" name="number" class="form-control" required>
                </div>
                <div class="col-lg-4 animel animel-right delay1" data-scroll data-scroll-repeat>
                    <input type="email" placeholder="Email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="text-center animel animel-top delay4" data-scroll data-scroll-repeat><button type="submit" class="btn btn-srb">Submit</button></div>
        </form>
    </div>
</section>
<!-- cta -->


<?php get_footer(); ?>
