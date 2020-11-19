/**
 * Created by masoud on 24/05/17.
 */
const values = {
    1: "یک",
    2: "دو",
    3: "سه",
    4: "چهار",
    5: "پنج",
    6: "شش",
    7: "هفت",
    8: "هشت",
    9: "نه",
    10: "ده",
    11: "یازده",
    12: "دوازده",
    13: "سیزده",
    14: "چهارده",
    15: "پانزده",
    16: "شانزده",
    17: "هفده",
    18: "هجده",
    19: "نوزده",
    20: "بیست",
    30: "سی",
    40: "چهل",
    50: "پنجاه",
    60: "شصت",
    70: "هفتاد",
    80: "هشتاد",
    90: "نود",
    100: "صد",
    200: "دویست",
    300: "سیصد",
    400: "جهارصد",
    500: "پانصد",
    600: "ششصد",
    700: "هفتصد",
    800: "هشتصد",
    900: "نهصد",
    1000: "هزار",
    1000000: "میلیون",
    1000000000: "میلیارد"
};

/**
 *
 * @param money
 * @returns {string}
 * @constructor
 */

function MinLocalizeMoney(money) {
    if (typeof money != typeof "" &&
        typeof money != typeof 1 &&
        typeof money != typeof 1.5) {
        return "";
    }
    money = parseInt(money);

    if (money == 0)
        return "";

    if (money < 100 && money % 10 == 0)
        return values[money];

    if (money >= 1000)
        money %= money;

    if (money <= 20) {
        return values[money];
    }

    var rval = "";
    if (money > 20) {
        var t = parseInt(money / 100);
        t *= 100;
        if (t > 0)
            rval += values[t];
        money %= 100;
        if (money > 0) {
            t = parseInt(money / 10);
            t *= 10;
            if (money <= 20) {
                rval += (rval.trim().length > 0 ? " و " : "") + values[money];
                return rval.trim();
            }
            else if (t > 0)
                rval += (rval.trim().length > 0 ? " و " : "") + values[t];
        }
        money %= 10;
        if (money > 0) {
            t = money;
            rval += (rval.trim().length > 0 ? " و " : "") + values[t];
        }
    }
    return rval.trim();
}

/**
 *
 * @param money
 * @returns {string}
 * @constructor
 */

function LocalizeMoney(money) {
    if (typeof money != typeof "" &&
        typeof money != typeof 1 &&
        typeof money != typeof 1.5) {
        return "";
    }
    money = parseInt(money);

    if (money < 1000) {
        return MinLocalizeMoney(money)
    } else if (money >= 1000 && money < 1000000) {
        var norm = money % 1000;
        money /= 1000;
        var hezar = money % 1000;
        return MinLocalizeMoney(hezar) + " " + values[1000]
            + (norm != 0 ? " و " + MinLocalizeMoney(norm) : "");
    } else if (money >= 1000000 && money < 1000000000) {
        var norm = money % 1000;
        money /= 1000;
        var hezar = money % 1000;
        money /= 1000;
        var mil = money % 1000;
        return MinLocalizeMoney(mil) + " " + values[1000000]
            + (hezar != 0 ? " و " + MinLocalizeMoney(hezar) + " " + values[1000] : "")
            + (norm != 0 ? MinLocalizeMoney(norm) : "");
    } else if (money >= 1000000000 && money < 1000000000000) {
        var norm = money % 1000;
        money /= 1000;
        var hezar = money % 1000;
        money /= 1000;
        var mil = money % 1000;
        money /= 1000;
        var milli = money % 1000;
        return MinLocalizeMoney(milli) + " " + values[1000000000]
            + (mil != 0 ? " و " + MinLocalizeMoney(mil) + " " + values[1000000] : "")
            + (hezar != 0 ? " و " + MinLocalizeMoney(hezar) + " " + values[1000] : "")
            + (norm != 0 ? " و " + MinLocalizeMoney(norm) : "");

    } else if (money >= 1000000000000) {
        return money.toString();
    }
}

function currencyFormat(val) {
    val = '' + val;
    var o = '';
    for (var i = 1; i <= val.length; ++i) {
        o += val[val.length - i];
        if (i % 3 == 0 && i != val.length) o += ',';
    }
    return (o.split('').reverse().join(''))
}

function updateMoney(e) {
    var val = e.value.replace(/,/g, '').replace(/-/g, '').replace(/\+/g, '');
    if (!val.match(/^[0-9]*$/g)) document.getElementById('persianMoney').innerHTML = '';
    if (!val) document.getElementById('persianMoney').innerHTML = '';
    try {
        val = parseInt(val);
    } catch (e) {
        document.getElementById('persianMoney').innerHTML = '';
    }
    var val3 = currencyFormat(val);
    if (val3 != 'NaN') e.value = val3;
    else document.getElementById('persianMoney').innerHTML = '';
    var val2 = LocalizeMoney(parseInt(val / 10));
    if (!val2)
        document.getElementById('persianMoney').innerHTML = '';
    else
        document.getElementById('persianMoney').innerHTML = val2 + ' تومان';
}

function limitPhone(e) {
    return e.value.length <= 11;

}