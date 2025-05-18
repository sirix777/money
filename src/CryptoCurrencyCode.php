<?php

declare(strict_types=1);

namespace Sirix\Money;

use Sirix\Money\Exception\InvalidArgumentException;

/**
 * Enum representing cryptocurrency codes.
 */
enum CryptoCurrencyCode: string
{
    // Cryptocurrencies
    case Btc = 'BTC';
    case Eth = 'ETH';
    case Xrp = 'XRP';
    case Usdt = 'USDT';
    case Bnb = 'BNB';
    case Sol = 'SOL';
    case Usdc = 'USDC';
    case Doge = 'DOGE';
    case Ada = 'ADA';
    case Trx = 'TRX';
    case Link = 'LINK';
    case Avax = 'AVAX';
    case Xlm = 'XLM';
    case Ton = 'TON';
    case Ltc = 'LTC';
    case Shib = 'SHIB';
    case Hbar = 'HBAR';
    case Dot = 'DOT';
    case Bch = 'BCH';
    case Uni = 'UNI';
    case Dai = 'DAI';
    case Xmr = 'XMR';
    case Near = 'NEAR';
    case Aave = 'AAVE';
    case Icp = 'ICP';
    case Etc = 'ETC';
    case Okb = 'OKB';
    case Tao = 'TAO';
    case Kas = 'KAS';
    case Pol = 'POL';
    case Vet = 'VET';
    case Algo = 'ALGO';
    case Cro = 'CRO';
    case Render = 'RENDER';
    case Jup = 'JUP';
    case Fil = 'FIL';
    case Arb = 'ARB';
    case Fdusd = 'FDUSD';
    case Gt = 'GT';
    case Atom = 'ATOM';
    case Fet = 'FET';
    case Ldo = 'LDO';
    case Tia = 'TIA';
    case Mkr = 'MKR';
    case Theta = 'THETA';
    case Apt = 'APT';
    case Mnt = 'MNT'; // Was MntCrypto = 'MNT_CRYPTO'
    case Qnt = 'QNT';
    case Rune = 'RUNE';
    case Sei = 'SEI';
    case Inj = 'INJ';
    case Egld = 'EGLD';
    case Imx = 'IMX';
    case Sui = 'SUI';
    case Stx = 'STX';
    case Grt = 'GRT';
    case Xtz = 'XTZ';
    case Axs = 'AXS';
    case Kava = 'KAVA';
    case Flow = 'FLOW';
    case Mina = 'MINA';
    case Snx = 'SNX';
    case Ape = 'APE';
    case Chz = 'CHZ';
    case Gala = 'GALA';
    case Crv = 'CRV';
    case Mana = 'MANA';
    case OneInch = '1INCH';
    case Comp = 'COMP';
    case Zec = 'ZEC';
    case Ens = 'ENS';
    case Dydx = 'DYDX';
    case Neo = 'NEO';
    case Iota = 'IOTA';
    case Bat = 'BAT';
    case Sand = 'SAND';
    case Hnt = 'HNT';
    case Gmt = 'GMT';
    case Ksm = 'KSM';
    case Audio = 'AUDIO';
    case Zil = 'ZIL';
    case Ankr = 'ANKR';
    case Ocean = 'OCEAN';
    case Rndr = 'RNDR';
    case Gno = 'GNO';
    case Yfi = 'YFI';
    case Bal = 'BAL';
    case Lrc = 'LRC';
    case Storj = 'STORJ';
    case Band = 'BAND';
    case Uma = 'UMA';
    case Cvc = 'CVC';
    case Rep = 'REP';
    case Nmr = 'NMR';
    case Oxt = 'OXT';
    case Ant = 'ANT';
    case Dnt = 'DNT';
    case Mln = 'MLN';
    case Rlc = 'RLC';
    case Nkn = 'NKN';
    case Rsr = 'RSR';
    case Coti = 'COTI';
    case Perp = 'PERP';
    case Trb = 'TRB';
    case Orn = 'ORN';
    case Mir = 'MIR';
    case Badger = 'BADGER';
    case Alpha = 'ALPHA';
    case Api3 = 'API3';
    case Forth = 'FORTH';
    case Rad = 'RAD';
    case Kp3r = 'KP3R';
    case Farm = 'FARM';
    case Btrst = 'BTRST';
    case Rare = 'RARE';
    case High = 'HIGH';
    case Idex = 'IDEX';
    case Ilv = 'ILV';
    case Rari = 'RARI';
    case Gtc = 'GTC';
    case Mask = 'MASK';
    case Xyo = 'XYO';
    case Ach = 'ACH';
    case Spell = 'SPELL';
    case Asm = 'ASM';
    case Rbn = 'RBN';
    case Pond = 'POND';
    case Lpt = 'LPT';
    case Gods = 'GODS';
    case Vra = 'VRA';
    case Req = 'REQ';
    case Aioz = 'AIOZ';
    case Dusk = 'DUSK';
    case Ern = 'ERN'; // Was ErnCrypto = 'ERN_CRYPTO'
    case C98 = 'C98';
    case Dia = 'DIA';
    case Tribe = 'TRIBE';
    case Ctsi = 'CTSI';
    case Cfg = 'CFG';
    case Alice = 'ALICE';
    case Bico = 'BICO';
    case Mdt = 'MDT';
    case Lto = 'LTO';
    case Bond = 'BOND';
    case Tvk = 'TVK';
    case Pols = 'POLS';
    case Drep = 'DREP';
    case Ramp = 'RAMP';
    case Tlm = 'TLM';
    case Sfp = 'SFP';
    case Ghst = 'GHST';
    case Sushi = 'SUSHI';
    case Quick = 'QUICK';
    case Fxs = 'FXS';
    case Nu = 'NU';
    case Bzrx = 'BZRX';
    case Ogn = 'OGN';
    case Cream = 'CREAM';
    case Tomo = 'TOMO';
    case Hot = 'HOT';
    case Keep = 'KEEP';
    case Arpa = 'ARPA';
    case Celr = 'CELR';
    case Akt = 'AKT';
    case Math = 'MATH';
    case Ren = 'REN';
    case Coval = 'COVAL';
    case Hegic = 'HEGIC';
    case Om = 'OM';
    case Waxp = 'WAXP';
    case Srm = 'SRM';
    case Ray = 'RAY';
    case Toke = 'TOKE';

    /**
     * Returns the number of decimal digits for this currency.
     */
    public function digits(): int
    {
        return match ($this) {
            self::Btc, self::Ltc, self::Doge, self::Hbar, self::Bch, self::Icp, self::Kas, self::Cro,
            self::Apt, self::Waxp, self::Flow, self::Gala, self::Zec, self::Neo, self::Hnt,
            self::Storj, self::Cvc, => 8,

            self::Eth, self::Bnb, self::Link, self::Avax, self::Uni, self::Dai, self::Aave,
            self::Etc, self::Okb, self::Pol, self::Vet, self::Render, self::Fil, self::Arb, self::Fdusd,
            self::Gt, self::Fet, self::Ldo, self::Mkr, self::Theta, self::Mnt, self::Qnt, self::Om,
            self::Hegic, self::Coval, self::Ren, self::Math, self::Akt, self::Celr, self::Arpa, self::Keep,
            self::Hot, self::Tomo, self::Cream, self::Ogn, self::Bzrx, self::Nu, self::Fxs, self::Quick,
            self::Sushi, self::Ghst, self::Sfp, self::Tlm, self::Ramp, self::Drep, self::Pols, self::Tvk,
            self::Bond, self::Lto, self::Mdt, self::Bico, self::Alice, self::Cfg, self::Ctsi, self::Tribe,
            self::Dia, self::C98, self::Ern, self::Dusk, self::Aioz, self::Req, self::Vra,
            self::Gods, self::Lpt, self::Pond, self::Rbn, self::Asm, self::Spell, self::Ach,
            self::Xyo, self::Mask, self::Gtc, self::Rari, self::Ilv, self::Idex, self::High,
            self::Rare, self::Btrst, self::Farm, self::Rad, self::Kp3r, self::Api3, self::Forth, self::Alpha,
            self::Toke, self::Mir, self::Ant, self::Dnt, self::Perp, self::Coti, self::Trb,
            self::Nkn, self::Rsr, self::Orn, self::Rlc, self::Oxt, self::Nmr, self::Rep, self::Mln,
            self::Badger, self::Uma, self::Gno, self::Rune, self::Inj, self::Egld, self::Imx, self::Grt,
            self::Axs, self::Snx, self::Ape, self::Crv, self::Mana, self::OneInch, self::Comp, self::Ens,
            self::Dydx, self::Bat, self::Sand, self::Gmt, self::Audio, self::Ankr, self::Ocean, self::Yfi,
            self::Bal, self::Lrc, self::Rndr, self::Band, self::Shib => 18,

            self::Xrp, self::Usdc, self::Ada, self::Trx, self::Algo, self::Jup, self::Atom, self::Tia,
            self::Sei, self::Ray, self::Srm, self::Stx, self::Xtz, self::Kava, self::Chz, self::Iota, self::Usdt => 6,

            self::Sol, self::Ton, self::Tao, self::Sui, self::Mina => 9,

            self::Xlm => 7,

            self::Dot => 10,

            self::Xmr, self::Ksm, self::Zil => 12,

            self::Near => 24,
        };
    }

    /**
     * Returns the numeric code for this currency.
     */
    public function numericCode(): int
    {
        return match ($this) {
            self::Ada => 1001,
            self::Bch => 1002,
            self::Bnb => 1003,
            self::Btc => 1004,
            self::Dot => 1006,
            self::Eth => 1007,
            self::Ltc => 1008,
            self::Sol => 1010,
            self::Trx => 1011,
            self::Usdc => 1012,
            self::Usdt => 1013,
            self::Xlm => 1014,
            self::Xrp => 1015,
            self::Ton => 1016,
            self::Avax => 1017,
            self::Link => 1018,
            self::Hbar => 1019,
            self::Uni => 1020,
            self::Dai => 1021,
            self::Xmr => 1022,
            self::Near => 1023,
            self::Aave => 1024,
            self::Icp => 1025,
            self::Etc => 1026,
            self::Okb => 1027,
            self::Tao => 1028,
            self::Kas => 1029,
            self::Pol => 1030,
            self::Vet => 1031,
            self::Algo => 1032,
            self::Cro => 1033,
            self::Render => 1034,
            self::Jup => 1035,
            self::Fil => 1036,
            self::Arb => 1037,
            self::Fdusd => 1038,
            self::Gt => 1039,
            self::Atom => 1040,
            self::Fet => 1041,
            self::Ldo => 1042,
            self::Tia => 1043,
            self::Mkr => 1044,
            self::Theta => 1045,
            self::Apt => 1046,
            self::Mnt => 1047, // Was MntCrypto
            self::Qnt => 1048,
            self::Rune => 1049,
            self::Sei => 1050,
            self::Inj => 1051,
            self::Egld => 1052,
            self::Imx => 1053,
            self::Sui => 1054,
            self::Stx => 1055,
            self::Grt => 1056,
            self::Xtz => 1058,
            self::Axs => 1059,
            self::Kava => 1060,
            self::Flow => 1061,
            self::Mina => 1062,
            self::Snx => 1063,
            self::Ape => 1064,
            self::Chz => 1065,
            self::Gala => 1066,
            self::Crv => 1067,
            self::Mana => 1068,
            self::OneInch => 1069,
            self::Comp => 1070,
            self::Zec => 1071,
            self::Ens => 1072,
            self::Dydx => 1073,
            self::Neo => 1074,
            self::Iota => 1075,
            self::Bat => 1076,
            self::Sand => 1077,
            self::Hnt => 1078,
            self::Gmt => 1079,
            self::Ksm => 1080,
            self::Audio => 1081,
            self::Zil => 1082,
            self::Ankr => 1083,
            self::Ocean => 1084,
            self::Rndr => 1085,
            self::Gno => 1086,
            self::Yfi => 1087,
            self::Bal => 1088,
            self::Lrc => 1089,
            self::Storj => 1090,
            self::Band => 1091,
            self::Uma => 1092,
            self::Cvc => 1093,
            self::Rep => 1094,
            self::Nmr => 1095,
            self::Oxt => 1096,
            self::Ant => 1097,
            self::Dnt => 1098,
            self::Mln => 1099,
            self::Rlc => 1100,
            self::Nkn => 1101,
            self::Rsr => 1102,
            self::Coti => 1103,
            self::Perp => 1104,
            self::Trb => 1105,
            self::Orn => 1106,
            self::Mir => 1107,
            self::Badger => 1108,
            self::Alpha => 1109,
            self::Api3 => 1110,
            self::Forth => 1111,
            self::Rad => 1112,
            self::Kp3r => 1113,
            self::Farm => 1114,
            self::Btrst => 1115,
            self::Rare => 1116,
            self::High => 1117,
            self::Idex => 1118,
            self::Ilv => 1119,
            self::Rari => 1120,
            self::Gtc => 1121,
            self::Mask => 1122,
            self::Xyo => 1124,
            self::Ach => 1125,
            self::Spell => 1127,
            self::Asm => 1128,
            self::Rbn => 1129,
            self::Pond => 1130,
            self::Lpt => 1131,
            self::Gods => 1132,
            self::Vra => 1133,
            self::Req => 1134,
            self::Aioz => 1135,
            self::Dusk => 1136,
            self::Ern => 1138, // Was ErnCrypto
            self::C98 => 1139,
            self::Dia => 1140,
            self::Tribe => 1141,
            self::Ctsi => 1142,
            self::Cfg => 1143,
            self::Alice => 1144,
            self::Bico => 1145,
            self::Mdt => 1146,
            self::Lto => 1147,
            self::Bond => 1148,
            self::Tvk => 1149,
            self::Pols => 1150,
            self::Drep => 1151,
            self::Ramp => 1152,
            self::Tlm => 1153,
            self::Sfp => 1154,
            self::Ghst => 1155,
            self::Sushi => 1156,
            self::Quick => 1157,
            self::Fxs => 1158,
            self::Nu => 1159,
            self::Bzrx => 1160,
            self::Ogn => 1161,
            self::Cream => 1162,
            self::Tomo => 1163,
            self::Hot => 1164,
            self::Keep => 1165,
            self::Arpa => 1166,
            self::Celr => 1167,
            self::Akt => 1168,
            self::Math => 1169,
            self::Ren => 1170,
            self::Coval => 1171,
            self::Hegic => 1172,
            self::Om => 1173,
            self::Waxp => 1174,
            self::Srm => 1175,
            self::Ray => 1176,
            self::Toke => 1178,
            self::Doge => 1005,
            self::Shib => 1009,
        };
    }

    /**
     * @return array<string, bool|int|string>
     */
    public function getParams(): array
    {
        return [
            'name' => $this->name(),
            'digits' => $this->digits(),
            'isCrypto' => true,
            'numericCode' => $this->numericCode(),
        ];
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function fromNumericCode(int $numericCode): self
    {
        return match ($numericCode) {
            1001 => self::Ada,
            1002 => self::Bch,
            1003 => self::Bnb,
            1004 => self::Btc,
            1005 => self::Doge,
            1006 => self::Dot,
            1007 => self::Eth,
            1008 => self::Ltc,
            1009 => self::Shib,
            1010 => self::Sol,
            1011 => self::Trx,
            1012 => self::Usdc,
            1013 => self::Usdt,
            1014 => self::Xlm,
            1015 => self::Xrp,
            1016 => self::Ton,
            1017 => self::Avax,
            1018 => self::Link,
            1019 => self::Hbar,
            1020 => self::Uni,
            1021 => self::Dai,
            1022 => self::Xmr,
            1023 => self::Near,
            1024 => self::Aave,
            1025 => self::Icp,
            1026 => self::Etc,
            1027 => self::Okb,
            1028 => self::Tao,
            1029 => self::Kas,
            1030 => self::Pol,
            1031 => self::Vet,
            1032 => self::Algo,
            1033 => self::Cro,
            1034 => self::Render,
            1035 => self::Jup,
            1036 => self::Fil,
            1037 => self::Arb,
            1038 => self::Fdusd,
            1039 => self::Gt,
            1040 => self::Atom,
            1041 => self::Fet,
            1042 => self::Ldo,
            1043 => self::Tia,
            1044 => self::Mkr,
            1045 => self::Theta,
            1046 => self::Apt,
            1047 => self::Mnt, // Was MntCrypto
            1048 => self::Qnt,
            1049 => self::Rune,
            1050 => self::Sei,
            1051 => self::Inj,
            1052 => self::Egld,
            1053 => self::Imx,
            1054 => self::Sui,
            1055 => self::Stx,
            1056 => self::Grt,
            1058 => self::Xtz,
            1059 => self::Axs,
            1060 => self::Kava,
            1061 => self::Flow,
            1062 => self::Mina,
            1063 => self::Snx,
            1064 => self::Ape,
            1065 => self::Chz,
            1066 => self::Gala,
            1067 => self::Crv,
            1068 => self::Mana,
            1069 => self::OneInch,
            1070 => self::Comp,
            1071 => self::Zec,
            1072 => self::Ens,
            1073 => self::Dydx,
            1074 => self::Neo,
            1075 => self::Iota,
            1076 => self::Bat,
            1077 => self::Sand,
            1078 => self::Hnt,
            1079 => self::Gmt,
            1080 => self::Ksm,
            1081 => self::Audio,
            1082 => self::Zil,
            1083 => self::Ankr,
            1084 => self::Ocean,
            1085 => self::Rndr,
            1086 => self::Gno,
            1087 => self::Yfi,
            1088 => self::Bal,
            1089 => self::Lrc,
            1090 => self::Storj,
            1091 => self::Band,
            1092 => self::Uma,
            1093 => self::Cvc,
            1094 => self::Rep,
            1095 => self::Nmr,
            1096 => self::Oxt,
            1097 => self::Ant,
            1098 => self::Dnt,
            1099 => self::Mln,
            1100 => self::Rlc,
            1101 => self::Nkn,
            1102 => self::Rsr,
            1103 => self::Coti,
            1104 => self::Perp,
            1105 => self::Trb,
            1106 => self::Orn,
            1107 => self::Mir,
            1108 => self::Badger,
            1109 => self::Alpha,
            1110 => self::Api3,
            1111 => self::Forth,
            1112 => self::Rad,
            1113 => self::Kp3r,
            1114 => self::Farm,
            1115 => self::Btrst,
            1116 => self::Rare,
            1117 => self::High,
            1118 => self::Idex,
            1119 => self::Ilv,
            1120 => self::Rari,
            1121 => self::Gtc,
            1122 => self::Mask,
            1124 => self::Xyo,
            1125 => self::Ach,
            1127 => self::Spell,
            1128 => self::Asm,
            1129 => self::Rbn,
            1130 => self::Pond,
            1131 => self::Lpt,
            1132 => self::Gods,
            1133 => self::Vra,
            1134 => self::Req,
            1135 => self::Aioz,
            1136 => self::Dusk,
            1138 => self::Ern, // Was ErnCrypto
            1139 => self::C98,
            1140 => self::Dia,
            1141 => self::Tribe,
            1142 => self::Ctsi,
            1143 => self::Cfg,
            1144 => self::Alice,
            1145 => self::Bico,
            1146 => self::Mdt,
            1147 => self::Lto,
            1148 => self::Bond,
            1149 => self::Tvk,
            1150 => self::Pols,
            1151 => self::Drep,
            1152 => self::Ramp,
            1153 => self::Tlm,
            1154 => self::Sfp,
            1155 => self::Ghst,
            1156 => self::Sushi,
            1157 => self::Quick,
            1158 => self::Fxs,
            1159 => self::Nu,
            1160 => self::Bzrx,
            1161 => self::Ogn,
            1162 => self::Cream,
            1163 => self::Tomo,
            1164 => self::Hot,
            1165 => self::Keep,
            1166 => self::Arpa,
            1167 => self::Celr,
            1168 => self::Akt,
            1169 => self::Math,
            1170 => self::Ren,
            1171 => self::Coval,
            1172 => self::Hegic,
            1173 => self::Om,
            1174 => self::Waxp,
            1175 => self::Srm,
            1176 => self::Ray,
            1178 => self::Toke,
            default => throw new InvalidArgumentException("Unknown numeric code: {$numericCode}"),
        };
    }

    /**
     * Returns the currency type.
     */
    public function type(): CurrencyType
    {
        return CurrencyType::Crypto;
    }

    /**
     * Returns the full name of the currency.
     */
    public function name(): string
    {
        return match ($this) {
            self::Btc => 'Bitcoin',
            self::Eth => 'Ethereum',
            self::Xrp => 'Ripple',
            self::Usdt => 'Tether',
            self::Bnb => 'Binance Coin',
            self::Sol => 'Solana',
            self::Usdc => 'USD Coin',
            self::Ada => 'Cardano',
            self::Trx => 'Tron',
            self::Link => 'Chainlink',
            self::Avax => 'Avalanche',
            self::Xlm => 'Stellar',
            self::Ton => 'Toncoin',
            self::Ltc => 'Litecoin',
            self::Hbar => 'Hedera',
            self::Dot => 'Polkadot',
            self::Bch => 'Bitcoin Cash',
            self::Uni => 'Uniswap',
            self::Dai => 'Dai',
            self::Xmr => 'Monero',
            self::Near => 'Near Protocol',
            self::Aave => 'Aave',
            self::Icp => 'Internet Computer',
            self::Etc => 'Ethereum Classic',
            self::Okb => 'OKB',
            self::Tao => 'Bittensor',
            self::Kas => 'Kaspa',
            self::Pol => 'Polygon',
            self::Vet => 'VeChain',
            self::Algo => 'Algorand',
            self::Cro => 'Cronos',
            self::Render => 'Render Token',
            self::Jup => 'Jupiter',
            self::Fil => 'Filecoin',
            self::Arb => 'Arbitrum',
            self::Fdusd => 'First Digital USD',
            self::Gt => 'GateToken',
            self::Atom => 'Cosmos',
            self::Fet => 'Fetch.ai',
            self::Ldo => 'Lido DAO',
            self::Tia => 'Celestia',
            self::Mkr => 'Maker',
            self::Theta => 'Theta Network',
            self::Apt => 'Aptos',
            self::Mnt => 'Mantle',
            self::Qnt => 'Quant',
            self::Rune => 'THORChain',
            self::Sei => 'Sei Network',
            self::Inj => 'Injective',
            self::Egld => 'MultiversX (Elrond)',
            self::Imx => 'Immutable X',
            self::Sui => 'Sui',
            self::Stx => 'Stacks',
            self::Grt => 'The Graph',
            self::Xtz => 'Tezos',
            self::Axs => 'Axie Infinity',
            self::Kava => 'Kava',
            self::Flow => 'Flow',
            self::Mina => 'Mina Protocol',
            self::Snx => 'Synthetix',
            self::Ape => 'ApeCoin',
            self::Chz => 'Chiliz',
            self::Gala => 'Gala',
            self::Crv => 'Curve DAO Token',
            self::Mana => 'Decentraland',
            self::OneInch => '1inch',
            self::Comp => 'Compound',
            self::Zec => 'Zcash',
            self::Ens => 'Ethereum Name Service',
            self::Dydx => 'dYdX',
            self::Neo => 'Neo',
            self::Iota => 'IOTA',
            self::Bat => 'Basic Attention Token',
            self::Sand => 'The Sandbox',
            self::Hnt => 'Helium',
            self::Gmt => 'STEPN',
            self::Ksm => 'Kusama',
            self::Audio => 'Audius',
            self::Zil => 'Zilliqa',
            self::Ankr => 'Ankr',
            self::Ocean => 'Ocean Protocol',
            self::Rndr => 'Render Network',
            self::Gno => 'Gnosis',
            self::Yfi => 'yearn.finance',
            self::Bal => 'Balancer',
            self::Lrc => 'Loopring',
            self::Storj => 'Storj',
            self::Band => 'Band Protocol',
            self::Uma => 'UMA',
            self::Cvc => 'Civic',
            self::Rep => 'Augur',
            self::Nmr => 'Numeraire',
            self::Oxt => 'Orchid',
            self::Ant => 'Aragon',
            self::Dnt => 'district0x',
            self::Mln => 'Enzyme',
            self::Rlc => 'iExec RLC',
            self::Nkn => 'NKN',
            self::Rsr => 'Reserve Rights',
            self::Coti => 'COTI',
            self::Perp => 'Perpetual Protocol',
            self::Trb => 'Tellor',
            self::Orn => 'Orion Protocol',
            self::Mir => 'Mirror Protocol',
            self::Badger => 'Badger DAO',
            self::Alpha => 'Alpha Venture DAO',
            self::Api3 => 'API3',
            self::Rad => 'Radicle',
            self::Kp3r => 'Keep3rV1',
            self::Farm => 'Harvest Finance',
            self::Toke => 'Tokemak',
            self::Idex => 'IDEX',
            self::Rari => 'Rarible',
            self::Gtc => 'Gitcoin',
            self::Ilv => 'Illuvium',
            self::Mask => 'Mask Network',
            self::Asm => 'Assemble Protocol',
            self::Pond => 'Marlin',
            self::Lpt => 'Livepeer',
            self::Rbn => 'Ribbon Finance',
            self::Spell => 'Spell Token',
            self::Btrst => 'Braintrust',
            self::High => 'Highstreet',
            self::Ach => 'Alchemy Pay',
            self::Xyo => 'XYO Network',
            self::Rare => 'SuperRare',
            self::Gods => 'Gods Unchained',
            self::Vra => 'Verasity',
            self::Waxp => 'WAX',
            self::Ern => 'Ethernity Chain',
            self::C98 => 'Coin98',
            self::Dusk => 'Dusk Network',
            self::Aioz => 'AIOZ Network',
            self::Req => 'Request',
            self::Dia => 'DIA',
            self::Ctsi => 'Cartesi',
            self::Bico => 'Biconomy',
            self::Mdt => 'Measurable Data Token',
            self::Alice => 'MyNeighborAlice',
            self::Lto => 'LTO Network',
            self::Cfg => 'Centrifuge',
            self::Tribe => 'Tribe',
            self::Bond => 'BarnBridge',
            self::Forth => 'Ampleforth Governance Token',
            self::Pols => 'Polkastarter',
            self::Tvk => 'Terra Virtua Kolect',
            self::Drep => 'Drep',
            self::Sfp => 'SafePal',
            self::Tlm => 'Alien Worlds',
            self::Ghst => 'Aavegotchi',
            self::Ramp => 'RAMP',
            self::Quick => 'QuickSwap',
            self::Fxs => 'Frax Share',
            self::Bzrx => 'bZx Protocol',
            self::Ogn => 'Origin Protocol',
            self::Sushi => 'SushiSwap',
            self::Cream => 'Cream Finance',
            self::Hot => 'Holo',
            self::Celr => 'Celer Network',
            self::Arpa => 'ARPA Chain',
            self::Keep => 'Keep Network',
            self::Nu => 'NuCypher',
            self::Math => 'Math Wallet',
            self::Akt => 'Akash Network',
            self::Ren => 'Ren',
            self::Srm => 'Serum',
            self::Ray => 'Raydium',
            self::Coval => 'Circuits of Value',
            self::Tomo => 'TomoChain',
            self::Hegic => 'Hegic',
            self::Om => 'MANTRA DAO',
            self::Doge => 'Dogecoin',
            self::Shib => 'Shiba Inu',
        };
    }
}
