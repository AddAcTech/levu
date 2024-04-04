<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levu</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#202020] h-screen w-full flex items-center bg-cover bg-center" style="background-image: url('https://images.pexels.com/photos/2120625/pexels-photo-2120625.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');">
    <section class="bg-white p-16 flex flex-col justify-between h-screen w-screen md:max-w-fit">
        <!-- <div class="w-44 h-12 bg-black mx-auto"></div> -->
        <a href="/login" class="mx-auto">
            <object width="200"><svg viewBox="0 0 2560 459" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <g id="currentColorff">
                <path fill="currentColor" opacity="1.00" d=" M 0.00 0.00 L 31.50 0.00 C 31.65 86.14 31.56 172.28 31.59 258.41 C 74.03 258.55 116.47 258.49 158.91 258.50 C 158.92 268.16 158.92 277.83 158.91 287.50 C 112.28 287.50 65.66 287.50 19.03 287.50 C 12.69 287.58 6.33 287.75 0.00 287.19 L 0.00 0.00 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 822.75 0.00 L 1008.08 0.00 C 1008.08 9.69 1008.08 19.39 1008.08 29.08 C 956.64 29.28 905.19 28.97 853.75 29.17 C 853.75 62.39 853.75 95.61 853.75 128.83 C 902.61 128.84 951.47 128.83 1000.33 128.83 C 1000.33 138.53 1000.33 148.22 1000.33 157.92 C 951.47 157.92 902.61 157.91 853.75 157.92 C 853.75 191.42 853.75 224.92 853.75 258.41 C 905.16 258.51 956.58 258.56 1007.99 258.44 C 1008.20 268.12 1008.03 277.81 1008.08 287.50 C 946.30 287.51 884.53 287.63 822.75 287.50 C 822.75 191.66 822.75 95.83 822.75 0.00 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 1441.13 85.13 C 1454.43 76.17 1469.99 70.75 1485.93 69.10 C 1506.49 66.73 1528.03 69.85 1546.22 80.06 C 1563.34 89.37 1577.86 104.10 1585.24 122.30 C 1577.94 125.54 1570.64 128.77 1563.31 131.94 C 1556.35 115.78 1543.23 102.18 1526.90 95.43 C 1497.16 83.90 1460.28 91.75 1439.21 116.14 C 1428.20 128.60 1421.22 144.41 1418.84 160.83 C 1415.57 181.66 1417.34 203.62 1425.96 223.00 C 1433.09 238.81 1445.36 252.47 1460.87 260.39 C 1478.68 269.48 1499.79 271.42 1519.13 266.66 C 1538.89 261.56 1555.33 246.42 1563.30 227.80 C 1570.64 230.92 1577.93 234.19 1585.23 237.41 C 1577.93 254.99 1564.01 269.34 1547.55 278.64 C 1530.26 288.74 1509.75 292.34 1489.94 290.70 C 1474.20 289.68 1458.71 284.98 1445.16 276.89 C 1429.43 267.64 1416.53 253.85 1407.91 237.81 C 1398.53 220.46 1393.96 200.68 1394.00 180.99 C 1393.70 162.55 1397.33 143.96 1405.20 127.24 C 1413.15 110.36 1425.49 95.42 1441.13 85.13 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 2461.00 70.93 C 2488.40 63.78 2519.41 71.46 2539.59 91.53 C 2547.70 99.44 2553.95 109.25 2557.62 119.98 C 2550.80 122.74 2543.98 125.49 2537.14 128.19 C 2532.53 115.95 2524.70 104.49 2513.23 97.79 C 2498.65 89.14 2480.30 87.08 2464.11 91.94 C 2455.57 94.71 2447.69 100.40 2443.58 108.53 C 2435.94 123.24 2439.96 142.77 2452.49 153.54 C 2462.04 162.17 2474.96 165.03 2486.95 168.61 C 2502.84 173.62 2519.62 177.03 2533.84 186.15 C 2544.81 192.96 2554.02 203.34 2557.32 216.04 C 2562.36 232.25 2559.28 250.62 2549.59 264.50 C 2539.20 278.81 2522.30 287.25 2505.08 289.89 C 2486.78 292.67 2467.42 290.71 2450.68 282.49 C 2430.43 272.71 2414.14 254.71 2407.30 233.19 C 2414.23 230.29 2421.35 227.86 2428.36 225.15 C 2432.99 238.24 2440.57 250.78 2452.16 258.81 C 2465.98 268.71 2483.82 271.60 2500.44 269.29 C 2508.11 268.17 2515.66 265.59 2522.08 261.18 C 2529.68 255.93 2535.18 247.39 2535.95 238.09 C 2536.83 228.73 2535.06 218.54 2528.83 211.20 C 2521.97 203.48 2512.14 199.34 2502.48 196.36 C 2489.33 192.53 2476.23 188.53 2463.09 184.65 C 2448.47 180.24 2434.41 171.99 2426.05 158.87 C 2415.84 143.79 2413.57 123.88 2419.75 106.81 C 2426.41 88.97 2442.57 75.32 2461.00 70.93 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 197.59 71.83 C 243.95 71.83 290.31 71.82 336.67 71.84 C 336.66 79.11 336.67 86.39 336.67 93.67 C 298.11 93.67 259.56 93.67 221.00 93.67 C 220.93 118.61 220.88 143.55 221.00 168.50 C 257.58 168.49 294.16 168.62 330.73 168.49 C 330.93 175.80 330.80 183.11 330.84 190.42 C 294.20 190.42 257.56 190.42 220.92 190.42 C 220.87 215.53 220.96 240.64 221.01 265.75 C 259.56 265.74 298.11 265.75 336.66 265.75 C 336.68 273.05 336.66 280.36 336.66 287.67 C 290.30 287.67 243.94 287.69 197.58 287.58 C 197.59 215.66 197.58 143.75 197.59 71.83 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 351.66 71.83 C 359.75 71.87 367.84 71.74 375.93 71.91 C 398.22 134.59 420.49 197.28 442.91 259.91 C 465.32 197.27 487.37 134.51 509.69 71.83 C 517.86 71.83 526.03 71.83 534.20 71.84 C 507.88 143.76 481.49 215.65 455.17 287.57 C 447.01 287.63 438.86 287.77 430.71 287.60 C 404.35 215.68 377.97 143.77 351.66 71.83 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 562.00 71.83 C 569.78 71.83 577.55 71.83 585.33 71.83 C 585.38 120.90 585.25 169.97 585.41 219.03 C 585.40 233.92 592.08 248.97 603.99 258.12 C 615.53 267.06 630.73 270.41 645.10 268.89 C 655.41 267.77 665.85 264.57 673.94 257.84 C 683.54 250.01 689.93 238.43 691.66 226.18 C 692.56 219.17 692.01 212.08 692.16 205.03 C 692.43 160.63 692.01 116.23 692.25 71.83 C 700.02 71.83 707.80 71.83 715.58 71.83 C 715.59 116.21 715.58 160.59 715.58 204.98 C 715.62 215.74 715.78 226.66 713.23 237.19 C 709.37 253.45 699.29 268.03 685.56 277.52 C 675.17 284.93 662.75 289.10 650.11 290.38 C 631.58 292.57 612.03 289.71 595.87 280.03 C 580.15 270.76 568.51 254.89 564.30 237.14 C 562.53 230.23 562.02 223.08 562.00 215.97 C 562.01 167.92 561.99 119.88 562.00 71.83 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 1030.28 71.84 C 1039.05 71.83 1047.82 71.82 1056.59 71.84 C 1074.83 100.43 1093.09 129.01 1111.33 157.59 C 1129.50 129.02 1147.65 100.42 1165.79 71.83 C 1174.56 71.84 1183.34 71.82 1192.11 71.84 C 1169.57 107.11 1146.91 142.31 1124.36 177.58 C 1147.81 214.24 1171.28 250.89 1194.70 287.57 C 1185.93 287.70 1177.16 287.68 1168.39 287.58 C 1149.37 257.66 1130.38 227.72 1111.33 197.82 C 1092.09 227.72 1072.91 257.66 1053.71 287.59 C 1045.14 287.70 1036.56 287.64 1027.99 287.59 C 1051.30 250.90 1074.66 214.25 1098.03 177.60 C 1075.49 142.32 1052.82 107.12 1030.28 71.84 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 1224.00 71.83 C 1270.33 71.83 1316.67 71.83 1363.00 71.83 C 1362.99 79.11 1363.00 86.39 1362.99 93.67 C 1324.44 93.66 1285.89 93.68 1247.34 93.66 C 1247.33 118.61 1247.33 143.55 1247.34 168.50 C 1283.97 168.72 1320.61 168.24 1357.25 168.69 C 1357.24 175.93 1357.27 183.17 1357.23 190.41 C 1320.60 190.43 1283.97 190.41 1247.34 190.42 C 1247.33 215.53 1247.34 240.64 1247.33 265.75 C 1285.89 265.75 1324.44 265.75 1363.00 265.75 C 1362.99 273.06 1363.00 280.36 1362.99 287.67 C 1316.66 287.67 1270.34 287.68 1224.01 287.59 C 1223.99 215.67 1224.00 143.75 1224.00 71.83 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 1625.92 71.83 C 1633.69 71.83 1641.47 71.83 1649.25 71.83 C 1649.25 114.87 1649.25 157.91 1649.25 200.94 C 1649.38 212.02 1648.23 223.41 1651.56 234.17 C 1656.20 250.27 1669.89 263.10 1686.12 267.11 C 1700.53 270.70 1716.52 269.85 1729.86 262.97 C 1738.78 258.34 1746.20 250.86 1750.66 241.83 C 1754.45 234.14 1756.06 225.51 1756.08 216.98 C 1756.08 168.60 1756.08 120.22 1756.08 71.83 C 1763.86 71.83 1771.63 71.83 1779.41 71.83 C 1779.42 111.88 1779.42 151.94 1779.41 191.99 C 1779.12 205.65 1780.39 219.45 1777.94 232.99 C 1774.99 249.85 1765.47 265.45 1751.85 275.81 C 1740.71 284.31 1727.05 289.16 1713.16 290.53 C 1695.18 292.25 1676.25 289.81 1660.52 280.46 C 1645.23 271.72 1633.64 256.85 1628.92 239.89 C 1626.44 231.51 1625.66 222.73 1625.92 214.02 C 1625.78 166.63 1625.81 119.23 1625.92 71.83 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 1807.25 71.83 C 1854.57 71.84 1901.90 71.82 1949.22 71.84 C 1949.28 79.09 1949.22 86.35 1949.26 93.61 C 1929.60 93.74 1909.94 93.65 1890.28 93.65 C 1890.05 158.32 1890.22 222.99 1890.16 287.67 C 1882.38 287.66 1874.60 287.70 1866.83 287.57 C 1866.88 222.99 1866.73 158.41 1866.91 93.83 C 1847.02 93.42 1827.12 93.92 1807.23 93.65 C 1807.13 86.37 1807.09 79.10 1807.25 71.83 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 1976.75 71.83 C 1984.52 71.83 1992.30 71.83 2000.08 71.83 C 2000.01 143.77 2000.24 215.72 1999.96 287.65 C 1992.22 287.70 1984.48 287.65 1976.75 287.57 C 1976.75 215.66 1976.74 143.75 1976.75 71.83 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 2029.41 71.83 C 2037.46 71.82 2045.53 71.84 2053.60 71.82 C 2075.98 134.53 2098.24 197.29 2120.65 259.98 C 2143.05 197.30 2165.10 134.50 2187.47 71.81 C 2195.62 71.86 2203.78 71.81 2211.94 71.84 C 2185.61 143.76 2159.24 215.67 2132.88 287.58 C 2124.74 287.62 2116.59 287.76 2108.46 287.60 C 2082.10 215.68 2055.71 143.77 2029.41 71.83 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 2239.17 71.91 C 2285.53 71.74 2331.89 71.87 2378.25 71.83 C 2378.25 79.11 2378.24 86.38 2378.25 93.66 C 2339.70 93.68 2301.14 93.66 2262.59 93.67 C 2262.58 118.61 2262.58 143.55 2262.59 168.50 C 2299.16 168.44 2335.74 168.73 2372.32 168.41 C 2372.64 175.74 2372.43 183.09 2372.43 190.43 C 2335.81 190.40 2299.20 190.42 2262.58 190.42 C 2262.59 215.53 2262.58 240.64 2262.59 265.75 C 2301.17 265.75 2339.76 265.75 2378.34 265.75 C 2378.15 273.02 2378.28 280.29 2378.25 287.56 C 2331.92 287.83 2285.58 287.58 2239.25 287.59 C 2239.20 215.70 2239.36 143.80 2239.17 71.91 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 903.98 397.97 C 912.58 387.87 927.40 384.29 939.88 388.37 C 947.98 390.81 955.05 396.72 958.33 404.59 C 955.09 406.20 951.83 407.74 948.58 409.31 C 943.74 396.13 925.03 392.93 914.89 401.80 C 904.04 411.37 903.42 429.61 912.48 440.57 C 920.97 450.38 938.25 450.63 946.65 440.57 C 949.52 437.37 950.46 433.00 950.88 428.84 C 943.75 428.82 936.62 428.85 929.50 428.83 C 929.49 425.69 929.49 422.55 929.50 419.42 C 940.17 419.42 950.85 419.40 961.52 419.43 C 962.18 429.31 960.92 440.30 953.80 447.80 C 941.89 461.32 918.83 461.33 906.13 448.90 C 892.30 435.96 891.72 412.14 903.98 397.97 Z"></path>
                <path fill="#00aeef" opacity="1.00" d=" M 1158.41 400.84 C 1159.80 390.46 1172.07 384.25 1181.61 387.56 C 1189.68 389.79 1195.22 398.69 1193.37 406.92 C 1192.19 413.87 1186.14 418.38 1180.63 422.02 C 1184.15 425.94 1187.71 429.83 1191.29 433.71 C 1193.72 430.07 1196.14 426.44 1198.72 422.91 C 1202.44 422.92 1206.16 422.91 1209.90 422.92 C 1206.03 429.05 1202.03 435.10 1198.18 441.24 C 1203.07 446.41 1207.63 451.88 1212.67 456.91 C 1208.22 456.84 1203.71 457.51 1199.32 456.60 C 1196.67 454.58 1194.74 451.77 1192.40 449.43 C 1184.41 458.51 1169.81 461.23 1159.60 454.34 C 1152.02 449.30 1150.18 438.21 1154.48 430.46 C 1156.83 426.08 1160.89 422.96 1165.04 420.39 C 1160.83 414.83 1156.85 408.11 1158.41 400.84 M 1168.70 401.03 C 1167.15 406.42 1170.96 411.28 1174.19 415.16 C 1177.75 412.96 1181.65 410.57 1183.35 406.54 C 1184.99 402.70 1182.97 397.66 1178.90 396.37 C 1174.99 394.75 1169.75 396.74 1168.70 401.03 M 1165.33 433.21 C 1162.96 436.63 1162.68 441.52 1164.98 445.05 C 1166.69 447.66 1169.98 448.65 1172.96 448.84 C 1177.96 448.93 1182.50 446.01 1185.56 442.23 C 1181.05 437.13 1176.34 432.23 1171.76 427.20 C 1169.45 429.01 1166.99 430.76 1165.33 433.21 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 1418.56 392.46 C 1433.90 381.60 1459.14 386.53 1466.68 404.57 C 1463.39 406.14 1460.09 407.68 1456.84 409.29 C 1452.00 396.41 1433.79 392.91 1423.62 401.51 C 1413.07 410.23 1411.97 426.87 1418.84 438.18 C 1424.74 447.52 1438.15 450.78 1447.85 445.66 C 1451.88 443.50 1454.64 439.66 1456.77 435.71 C 1460.05 437.21 1463.31 438.75 1466.57 440.32 C 1460.99 454.17 1444.14 460.68 1430.16 457.34 C 1419.08 455.06 1409.59 446.61 1405.94 435.91 C 1400.39 420.82 1404.71 401.58 1418.56 392.46 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 1593.46 387.66 C 1605.25 384.99 1618.50 388.25 1627.11 396.92 C 1639.91 409.41 1640.70 431.73 1629.36 445.42 C 1620.66 456.27 1605.23 460.57 1591.99 456.81 C 1582.82 454.50 1574.83 448.15 1570.38 439.84 C 1564.37 428.54 1564.72 414.08 1571.39 403.15 C 1576.21 395.22 1584.41 389.61 1593.46 387.66 M 1597.11 397.18 C 1592.65 397.91 1588.49 400.06 1585.19 403.13 C 1574.52 412.79 1574.35 431.34 1584.71 441.29 C 1593.43 450.03 1608.86 450.22 1617.99 442.01 C 1628.59 432.69 1629.24 414.58 1619.56 404.37 C 1614.02 398.21 1605.14 395.74 1597.11 397.18 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 1908.56 392.63 C 1923.87 381.55 1949.43 386.41 1956.93 404.61 C 1953.64 406.13 1950.35 407.66 1947.14 409.31 C 1942.31 396.59 1924.47 392.94 1914.22 401.24 C 1902.90 410.24 1901.98 428.34 1910.19 439.69 C 1916.60 447.99 1929.24 450.53 1938.41 445.49 C 1942.31 443.32 1944.95 439.56 1947.04 435.72 C 1950.33 437.23 1953.62 438.75 1956.87 440.38 C 1951.08 454.35 1933.95 460.85 1919.82 457.20 C 1909.43 454.83 1900.48 447.07 1896.67 437.12 C 1890.49 421.92 1894.53 402.09 1908.56 392.63 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 2506.42 391.33 C 2521.82 381.91 2545.50 387.24 2552.76 404.55 C 2549.51 406.18 2546.23 407.74 2542.97 409.30 C 2538.10 395.97 2519.01 392.88 2508.97 402.09 C 2498.48 411.69 2497.94 429.48 2506.72 440.38 C 2515.05 450.28 2532.29 450.71 2540.81 440.84 C 2543.88 437.63 2544.84 433.12 2545.28 428.84 C 2538.16 428.83 2531.04 428.84 2523.93 428.83 C 2523.81 425.70 2523.79 422.56 2523.84 419.42 C 2534.52 419.40 2545.21 419.42 2555.91 419.41 C 2556.52 428.71 2555.56 438.93 2549.42 446.39 C 2541.16 457.03 2525.90 460.60 2513.36 456.44 C 2501.20 452.84 2492.09 441.60 2490.22 429.17 C 2487.66 414.92 2493.49 398.69 2506.42 391.33 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 8.67 387.83 C 12.28 387.83 15.89 387.83 19.50 387.83 C 19.51 398.03 19.50 408.22 19.50 418.41 C 30.11 418.41 40.72 418.43 51.32 418.41 C 51.42 408.19 51.19 397.96 51.44 387.75 C 55.01 387.89 58.59 387.82 62.17 387.83 C 62.17 410.89 62.17 433.94 62.17 457.00 C 58.55 457.00 54.94 457.00 51.33 456.99 C 51.34 447.38 51.33 437.78 51.33 428.17 C 40.72 428.17 30.11 428.17 19.50 428.17 C 19.50 437.77 19.49 447.38 19.51 456.99 C 15.89 457.00 12.28 457.00 8.67 457.00 C 8.67 433.94 8.66 410.89 8.67 387.83 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 166.25 387.83 C 169.86 387.83 173.47 387.83 177.08 387.83 C 177.09 402.26 177.07 416.68 177.09 431.10 C 177.12 435.55 178.16 440.30 181.38 443.56 C 187.71 450.07 199.80 449.45 205.26 442.13 C 208.36 438.12 208.31 432.80 208.34 427.99 C 208.23 414.60 208.19 401.22 208.34 387.83 C 211.92 387.83 215.50 387.83 219.08 387.83 C 219.08 403.21 219.08 418.59 219.08 433.97 C 219.07 442.85 213.69 451.59 205.56 455.30 C 199.33 458.09 192.18 459.26 185.53 457.29 C 175.10 455.15 166.67 445.72 166.30 434.98 C 166.19 419.27 166.28 403.55 166.25 387.83 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 323.92 387.85 C 326.83 387.73 329.75 387.69 332.65 388.07 C 344.19 403.68 355.40 419.54 366.89 435.18 C 367.13 419.40 366.94 403.62 367.00 387.83 C 370.72 387.83 374.44 387.83 378.17 387.83 C 378.17 410.89 378.17 433.94 378.17 457.00 C 375.17 457.00 372.18 457.00 369.19 457.00 C 357.64 441.02 346.26 424.91 334.76 408.89 C 334.74 424.92 334.75 440.96 334.75 456.99 C 331.14 457.00 327.53 457.00 323.92 457.00 C 323.92 433.95 323.92 410.90 323.92 387.85 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 476.00 387.83 C 491.75 387.83 507.50 387.83 523.25 387.83 C 523.25 391.11 523.25 394.38 523.25 397.66 C 517.25 397.67 511.25 397.67 505.26 397.66 C 505.24 417.44 505.26 437.22 505.25 457.00 C 501.63 457.00 498.02 457.00 494.41 456.99 C 494.42 437.22 494.42 417.44 494.41 397.67 C 488.28 397.66 482.14 397.66 476.01 397.67 C 475.99 394.39 475.99 391.11 476.00 387.83 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 622.49 456.99 C 622.53 433.94 622.44 410.89 622.54 387.83 C 626.13 387.83 629.73 387.83 633.33 387.83 C 633.34 410.89 633.33 433.94 633.33 457.00 C 629.72 457.00 626.10 457.00 622.49 456.99 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 737.83 387.85 C 740.72 387.88 743.72 387.44 746.56 388.22 C 758.24 403.68 769.23 419.66 780.82 435.19 C 780.84 419.41 780.82 403.62 780.83 387.83 C 784.55 387.84 788.27 387.85 792.00 387.74 C 792.14 410.82 792.06 433.91 792.08 457.00 C 789.07 457.00 786.06 457.00 783.06 457.00 C 771.48 441.01 760.15 424.85 748.57 408.86 C 748.79 424.90 748.61 440.95 748.67 457.00 C 745.05 457.00 741.44 457.00 737.83 457.00 C 737.83 433.95 737.83 410.90 737.83 387.85 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 1734.25 457.00 C 1742.34 433.93 1750.43 410.87 1758.60 387.83 C 1763.08 387.83 1767.58 387.83 1772.08 387.83 C 1780.26 410.87 1788.26 433.97 1796.47 457.00 C 1792.52 457.01 1788.59 456.95 1784.67 457.05 C 1782.80 451.84 1781.17 446.55 1779.30 441.35 C 1770.03 441.32 1760.76 441.33 1751.49 441.34 C 1749.60 446.54 1747.83 451.77 1746.02 457.00 C 1742.09 457.00 1738.16 457.00 1734.25 457.00 M 1754.54 431.50 C 1761.69 431.50 1768.85 431.49 1776.02 431.50 C 1772.24 421.27 1769.14 410.81 1765.38 400.57 C 1761.50 410.79 1758.38 421.27 1754.54 431.50 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 2058.59 387.83 C 2062.18 387.83 2065.79 387.83 2069.41 387.83 C 2069.42 398.03 2069.40 408.22 2069.42 418.42 C 2080.02 418.41 2090.62 418.42 2101.23 418.41 C 2101.46 408.22 2101.27 398.03 2101.33 387.84 C 2104.90 387.83 2108.49 387.83 2112.08 387.83 C 2112.09 410.89 2112.04 433.94 2112.17 457.00 C 2108.54 457.00 2104.93 457.00 2101.33 456.99 C 2101.17 447.38 2101.49 437.77 2101.25 428.17 C 2090.63 428.17 2080.02 428.16 2069.41 428.17 C 2069.41 437.78 2069.41 447.39 2069.42 457.00 C 2065.79 457.00 2062.18 457.00 2058.58 457.00 C 2058.58 433.94 2058.58 410.89 2058.59 387.83 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 2216.92 387.83 C 2220.52 387.83 2224.13 387.83 2227.75 387.84 C 2227.75 410.89 2227.74 433.94 2227.75 456.99 C 2224.13 457.00 2220.52 457.00 2216.92 457.00 C 2216.92 433.94 2216.91 410.89 2216.92 387.83 Z"></path>
                <path fill="currentColor" opacity="1.00" d=" M 2332.25 387.84 C 2335.15 387.81 2338.06 387.83 2341.00 387.93 C 2352.33 403.75 2363.72 419.52 2375.24 435.21 C 2375.26 419.42 2375.24 403.62 2375.25 387.83 C 2378.96 387.83 2382.68 387.87 2386.41 387.75 C 2386.63 410.83 2386.34 433.91 2386.52 456.99 C 2383.46 457.00 2380.43 457.01 2377.41 456.97 C 2365.92 440.96 2354.52 424.87 2343.01 408.87 C 2343.02 424.91 2343.13 440.96 2343.08 457.00 C 2339.46 457.00 2335.84 457.00 2332.25 456.99 C 2332.25 433.94 2332.25 410.89 2332.25 387.84 Z"></path>
            </g>
            </svg>
            </object>
          </a>
        <form action="/login" method="POST" class="flex flex-col w-full gap-3">
            <h1 class="font-medium text-xl">Iniciar Sesion</h1>
            @csrf
            <input type="text" name="username" placeholder="Usuaio/Correo" class="p-2 border bg-[#f8f9fa] ">
            <input type="password" name="password" placeholder="Contraseña" class="p-2 border bg-[#f8f9fa] ">
            <input type="submit" value="Iniciar sesión" class="p-2 bg-[#000222] rounded-full text-white font-bold">
        </form>
        
        <p class="text-[#969da2] text-center">No tienes una cuenta? <a href="/register" class="text-[#2aaada] font-bold">Registrate</a></p>
    </section>
</body>
</html>