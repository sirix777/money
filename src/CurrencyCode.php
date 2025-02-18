<?php

declare(strict_types=1);

namespace Sirix\Money;

use Sirix\Money\Exception\InvalidArgumentException;

enum CurrencyCode: string
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
    case MntCrypto = 'MNT_CRYPTO';
    case Qnt = 'QNT';
    case Rune = 'RUNE';
    case Sei = 'SEI';
    case Inj = 'INJ';
    case Egld = 'EGLD';
    case Imx = 'IMX';
    case Sui = 'SUI';
    case Stx = 'STX';
    case Grt = 'GRT';
    case Bsv = 'BSV';
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
    case Rad = 'RAD';
    case Kp3r = 'KP3R';
    case Farm = 'FARM';
    case Boring = 'BORING';
    case Toke = 'TOKE';
    case Idex = 'IDEX';
    case Rari = 'RARI';
    case Gtc = 'GTC';
    case Ilv = 'ILV';
    case Mask = 'MASK';
    case Asm = 'ASM';
    case Pond = 'POND';
    case Lpt = 'LPT';
    case Rbn = 'RBN';
    case Spell = 'SPELL';
    case Btrst = 'BTRST';
    case High = 'HIGH';
    case Jasmy = 'JASMY';
    case Ach = 'ACH';
    case Xyo = 'XYO';
    case Rare = 'RARE';
    case Gods = 'GODS';
    case SosCrypto = 'SOS_CRYPTO';
    case Vra = 'VRA';
    case Waxp = 'WAXP';
    case ErnCrypto = 'ERN_CRYPTO';
    case Slp = 'SLP';
    case C98 = 'C98';
    case Dusk = 'DUSK';
    case Aioz = 'AIOZ';
    case Req = 'REQ';
    case Dia = 'DIA';
    case Ctsi = 'CTSI';
    case Bico = 'BICO';
    case Mdt = 'MDT';
    case Alice = 'ALICE';
    case Lto = 'LTO';
    case Cfg = 'CFG';
    case Tribe = 'TRIBE';
    case Bond = 'BOND';
    case Forth = 'FORTH';
    case Pols = 'POLS';
    case Tvk = 'TVK';
    case Drep = 'DREP';
    case Sfp = 'SFP';
    case Tlm = 'TLM';
    case Ghst = 'GHST';
    case Ramp = 'RAMP';
    case Quick = 'QUICK';
    case Fxs = 'FXS';
    case Bzrx = 'BZRX';
    case Ogn = 'OGN';
    case Sushi = 'SUSHI';
    case Cream = 'CREAM';
    case Hot = 'HOT';
    case Celr = 'CELR';
    case Arpa = 'ARPA';
    case Keep = 'KEEP';
    case Nu = 'NU';
    case Math = 'MATH';
    case Akt = 'AKT';
    case Ren = 'REN';
    case Srm = 'SRM';
    case Ray = 'RAY';
    case Coval = 'COVAL';
    case Tomo = 'TOMO';
    case Hegic = 'HEGIC';
    case Om = 'OM';

    // Fiat ISO currency cases
    case Aed = 'AED';
    case Afn = 'AFN';
    case All = 'ALL';
    case Amd = 'AMD';
    case Ang = 'ANG';
    case Aoa = 'AOA';
    case Ars = 'ARS';
    case Aud = 'AUD';
    case Awg = 'AWG';
    case Azn = 'AZN';
    case Bam = 'BAM';
    case Bbd = 'BBD';
    case Bdt = 'BDT';
    case Bgn = 'BGN';
    case Bhd = 'BHD';
    case Bif = 'BIF';
    case Bmd = 'BMD';
    case Bnd = 'BND';
    case Bob = 'BOB';
    case Bov = 'BOV';
    case Brl = 'BRL';
    case Bsd = 'BSD';
    case Btn = 'BTN';
    case Bwp = 'BWP';
    case Byn = 'BYN';
    case Bzd = 'BZD';
    case Cad = 'CAD';
    case Cdf = 'CDF';
    case Che = 'CHE';
    case Chf = 'CHF';
    case Chw = 'CHW';
    case Clf = 'CLF';
    case Clp = 'CLP';
    case Cny = 'CNY';
    case Cop = 'COP';
    case Cou = 'COU';
    case Crc = 'CRC';
    case Cuc = 'CUC';
    case Cup = 'CUP';
    case Cve = 'CVE';
    case Czk = 'CZK';
    case Djf = 'DJF';
    case Dkk = 'DKK';
    case Dop = 'DOP';
    case Dzd = 'DZD';
    case Egp = 'EGP';
    case Ern = 'ERN';
    case Etb = 'ETB';
    case Eur = 'EUR';
    case Fjd = 'FJD';
    case Fkp = 'FKP';
    case Gbp = 'GBP';
    case Gel = 'GEL';
    case Ghs = 'GHS';
    case Gip = 'GIP';
    case Gmd = 'GMD';
    case Gnf = 'GNF';
    case Gtq = 'GTQ';
    case Gyd = 'GYD';
    case Hkd = 'HKD';
    case Hnl = 'HNL';
    case Htg = 'HTG';
    case Huf = 'HUF';
    case Idr = 'IDR';
    case Ils = 'ILS';
    case Inr = 'INR';
    case Iqd = 'IQD';
    case Irr = 'IRR';
    case Isk = 'ISK';
    case Jmd = 'JMD';
    case Jod = 'JOD';
    case Jpy = 'JPY';
    case Kes = 'KES';
    case Kgs = 'KGS';
    case Khr = 'KHR';
    case Kmf = 'KMF';
    case Kpw = 'KPW';
    case Krw = 'KRW';
    case Kwd = 'KWD';
    case Kyd = 'KYD';
    case Kzt = 'KZT';
    case Lak = 'LAK';
    case Lbp = 'LBP';
    case Lkr = 'LKR';
    case Lrd = 'LRD';
    case Lsl = 'LSL';
    case Lyd = 'LYD';
    case Mad = 'MAD';
    case Mdl = 'MDL';
    case Mga = 'MGA';
    case Mkd = 'MKD';
    case Mmk = 'MMK';
    case Mnt = 'MNT';
    case Mop = 'MOP';
    case Mru = 'MRU';
    case Mur = 'MUR';
    case Mvr = 'MVR';
    case Mwk = 'MWK';
    case Mxn = 'MXN';
    case Mxv = 'MXV';
    case Myr = 'MYR';
    case Mzn = 'MZN';
    case Nad = 'NAD';
    case Ngn = 'NGN';
    case Nio = 'NIO';
    case Nok = 'NOK';
    case Npr = 'NPR';
    case Nzd = 'NZD';
    case Omr = 'OMR';
    case Pab = 'PAB';
    case Pen = 'PEN';
    case Pgk = 'PGK';
    case Php = 'PHP';
    case Pkr = 'PKR';
    case Pln = 'PLN';
    case Pyg = 'PYG';
    case Qar = 'QAR';
    case Ron = 'RON';
    case Rsd = 'RSD';
    case Rub = 'RUB';
    case Rwf = 'RWF';
    case Sar = 'SAR';
    case Sbd = 'SBD';
    case Scr = 'SCR';
    case Sdg = 'SDG';
    case Sek = 'SEK';
    case Sgd = 'SGD';
    case Shp = 'SHP';
    case Sle = 'SLE';
    case Sos = 'SOS';
    case Srd = 'SRD';
    case Ssp = 'SSP';
    case Stn = 'STN';
    case Svc = 'SVC';
    case Syp = 'SYP';
    case Szl = 'SZL';
    case Thb = 'THB';
    case Tjs = 'TJS';
    case Tmt = 'TMT';
    case Tnd = 'TND';
    case Top = 'TOP';
    case Try = 'TRY';
    case Ttd = 'TTD';
    case Twd = 'TWD';
    case Tzs = 'TZS';
    case Uah = 'UAH';
    case Ugx = 'UGX';
    case Usd = 'USD';
    case Usn = 'USN';
    case Uyi = 'UYI';
    case Uyu = 'UYU';
    case Uyw = 'UYW';
    case Uzs = 'UZS';
    case Ved = 'VED';
    case Ves = 'VES';
    case Vnd = 'VND';
    case Vuv = 'VUV';
    case Wst = 'WST';
    case Xaf = 'XAF';
    case Xcd = 'XCD';
    case Xof = 'XOF';
    case Xpf = 'XPF';
    case Yer = 'YER';
    case Zar = 'ZAR';
    case Zmw = 'ZMW';
    case Zwg = 'ZWG';

    public function name(): string
    {
        return match ($this) {
            // Cryptocurrencies full names
            self::Btc => 'Bitcoin',
            self::Eth => 'Ethereum',
            self::Xrp => 'Ripple',
            self::Usdt => 'Tether',
            self::Bnb => 'Binance Coin',
            self::Sol => 'Solana',
            self::Usdc => 'USD Coin',
            self::Doge => 'Dogecoin',
            self::Ada => 'Cardano',
            self::Trx => 'Tron',
            self::Link => 'Chainlink',
            self::Avax => 'Avalanche',
            self::Xlm => 'Stellar',
            self::Ton => 'Toncoin',
            self::Ltc => 'Litecoin',
            self::Shib => 'Shiba Inu',
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
            self::MntCrypto => 'Mantle',
            self::Qnt => 'Quant',
            self::Rune => 'THORChain',
            self::Sei => 'Sei Network',
            self::Inj => 'Injective',
            self::Egld => 'MultiversX (Elrond)',
            self::Imx => 'Immutable X',
            self::Sui => 'Sui',
            self::Stx => 'Stacks',
            self::Grt => 'The Graph',
            self::Bsv => 'Bitcoin SV',
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
            self::Boring => 'BoringDAO',
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
            self::Jasmy => 'JasmyCoin',
            self::Ach => 'Alchemy Pay',
            self::Xyo => 'XYO Network',
            self::Rare => 'SuperRare',
            self::Gods => 'Gods Unchained',
            self::SosCrypto => 'OpenDAO',
            self::Vra => 'Verasity',
            self::Waxp => 'WAX',
            self::ErnCrypto => 'Ethernity Chain',
            self::Slp => 'Smooth Love Potion',
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
            // Fiat Currencies with Full Names
            self::Aed => 'United Arab Emirates Dirham',
            self::Afn => 'Afghan Afghani',
            self::All => 'Albanian Lek',
            self::Amd => 'Armenian Dram',
            self::Ang => 'Netherlands Antillean Guilder',
            self::Aoa => 'Angolan Kwanza',
            self::Ars => 'Argentine Peso',
            self::Aud => 'Australian Dollar',
            self::Awg => 'Aruban Florin',
            self::Azn => 'Azerbaijani Manat',
            self::Bam => 'Bosnia and Herzegovina Convertible Mark',
            self::Bbd => 'Barbados Dollar',
            self::Bdt => 'Bangladeshi Taka',
            self::Bgn => 'Bulgarian Lev',
            self::Bhd => 'Bahraini Dinar',
            self::Bif => 'Burundian Franc',
            self::Bmd => 'Bermudian Dollar',
            self::Bnd => 'Brunei Dollar',
            self::Bob => 'Boliviano',
            self::Bov => 'Bolivian Mvdol',
            self::Brl => 'Brazilian Real',
            self::Bsd => 'Bahamian Dollar',
            self::Btn => 'Bhutanese Ngultrum',
            self::Bwp => 'Botswana Pula',
            self::Byn => 'Belarusian Ruble',
            self::Bzd => 'Belize Dollar',
            self::Cad => 'Canadian Dollar',
            self::Cdf => 'Congolese Franc',
            self::Che => 'WIR Euro',
            self::Chf => 'Swiss Franc',
            self::Chw => 'WIR Franc',
            self::Clf => 'Unidad de Fomento',
            self::Clp => 'Chilean Peso',
            self::Cny => 'Chinese Yuan',
            self::Cop => 'Colombian Peso',
            self::Cou => 'Unidad de Valor Real',
            self::Crc => 'Costa Rican Colón',
            self::Cuc => 'Cuban Convertible Peso',
            self::Cup => 'Cuban Peso',
            self::Cve => 'Cape Verdean Escudo',
            self::Czk => 'Czech Koruna',
            self::Djf => 'Djiboutian Franc',
            self::Dkk => 'Danish Krone',
            self::Dop => 'Dominican Peso',
            self::Dzd => 'Algerian Dinar',
            self::Egp => 'Egyptian Pound',
            self::Ern => 'Eritrean Nakfa',
            self::Etb => 'Ethiopian Birr',
            self::Eur => 'Euro',
            self::Fjd => 'Fiji Dollar',
            self::Fkp => 'Falkland Islands Pound',
            self::Gbp => 'Pound Sterling',
            self::Gel => 'Georgian Lari',
            self::Ghs => 'Ghanaian Cedi',
            self::Gip => 'Gibraltar Pound',
            self::Gmd => 'Gambian Dalasi',
            self::Gnf => 'Guinean Franc',
            self::Gtq => 'Guatemalan Quetzal',
            self::Gyd => 'Guyanese Dollar',
            self::Hkd => 'Hong Kong Dollar',
            self::Hnl => 'Honduran Lempira',
            self::Htg => 'Haitian Gourde',
            self::Huf => 'Hungarian Forint',
            self::Idr => 'Indonesian Rupiah',
            self::Ils => 'Israeli New Shekel',
            self::Inr => 'Indian Rupee',
            self::Iqd => 'Iraqi Dinar',
            self::Irr => 'Iranian Rial',
            self::Isk => 'Icelandic Króna',
            self::Jmd => 'Jamaican Dollar',
            self::Jod => 'Jordanian Dinar',
            self::Jpy => 'Japanese Yen',
            self::Kes => 'Kenyan Shilling',
            self::Kgs => 'Kyrgyzstan Som',
            self::Khr => 'Cambodian Riel',
            self::Kmf => 'Comoro Franc',
            self::Kpw => 'North Korean Won',
            self::Krw => 'South Korean Won',
            self::Kwd => 'Kuwaiti Dinar',
            self::Kyd => 'Cayman Islands Dollar',
            self::Kzt => 'Kazakhstani Tenge',
            self::Lak => 'Lao Kip',
            self::Lbp => 'Lebanese Pound',
            self::Lkr => 'Sri Lankan Rupee',
            self::Lrd => 'Liberian Dollar',
            self::Lsl => 'Lesotho Loti',
            self::Lyd => 'Libyan Dinar',
            self::Mad => 'Moroccan Dirham',
            self::Mdl => 'Moldovan Leu',
            self::Mga => 'Malagasy Ariary',
            self::Mkd => 'Macedonian Denar',
            self::Mmk => 'Myanmar Kyat',
            self::Mnt => 'Mongolian Tögrög',
            self::Mop => 'Macanese Pataca',
            self::Mru => 'Mauritanian Ouguiya',
            self::Mur => 'Mauritian Rupee',
            self::Mvr => 'Maldivian Rufiyaa',
            self::Mwk => 'Malawian Kwacha',
            self::Mxn => 'Mexican Peso',
            self::Mxv => 'Mexican Unidad de Inversión',
            self::Myr => 'Malaysian Ringgit',
            self::Mzn => 'Mozambican Metical',
            self::Nad => 'Namibian Dollar',
            self::Ngn => 'Nigerian Naira',
            self::Nio => 'Nicaraguan Córdoba',
            self::Nok => 'Norwegian Krone',
            self::Npr => 'Nepalese Rupee',
            self::Nzd => 'New Zealand Dollar',
            self::Omr => 'Omani Rial',
            self::Pab => 'Panamanian Balboa',
            self::Pen => 'Peruvian Sol',
            self::Pgk => 'Papua New Guinean Kina',
            self::Php => 'Philippine Peso',
            self::Pkr => 'Pakistani Rupee',
            self::Pln => 'Polish Złoty',
            self::Pyg => 'Paraguayan Guaraní',
            self::Qar => 'Qatari Riyal',
            self::Ron => 'Romanian Leu',
            self::Rsd => 'Serbian Dinar',
            self::Rub => 'Russian Ruble',
            self::Rwf => 'Rwandan Franc',
            self::Sar => 'Saudi Riyal',
            self::Sbd => 'Solomon Islands Dollar',
            self::Scr => 'Seychelles Rupee',
            self::Sdg => 'Sudanese Pound',
            self::Sek => 'Swedish Krona',
            self::Sgd => 'Singapore Dollar',
            self::Shp => 'Saint Helena Pound',
            self::Sle => 'Sierra Leonean Leone',
            self::Sos => 'Somali Shilling',
            self::Srd => 'Surinamese Dollar',
            self::Ssp => 'South Sudanese Pound',
            self::Stn => 'São Tomé and Príncipe Dobra',
            self::Svc => 'Salvadoran Colón',
            self::Syp => 'Syrian Pound',
            self::Szl => 'Swazi Lilangeni',
            self::Thb => 'Thai Baht',
            self::Tjs => 'Tajikistani Somoni',
            self::Tmt => 'Turkmenistan Manat',
            self::Tnd => 'Tunisian Dinar',
            self::Top => 'Tongan Paʻanga',
            self::Try => 'Turkish Lira',
            self::Ttd => 'Trinidad and Tobago Dollar',
            self::Twd => 'New Taiwan Dollar',
            self::Tzs => 'Tanzanian Shilling',
            self::Uah => 'Ukrainian Hryvnia',
            self::Ugx => 'Ugandan Shilling',
            self::Usd => 'United States Dollar',
            self::Usn => 'US Dollar (Next day)',
            self::Uyi => 'Uruguay Peso en Unidades Indexadas',
            self::Uyu => 'Uruguayan Peso',
            self::Uyw => 'Unidad Previsional',
            self::Uzs => 'Uzbekistan Som',
            self::Ved => 'Venezuelan Digital Bolivar',
            self::Ves => 'Venezuelan Sovereign Bolivar',
            self::Vnd => 'Vietnamese Đồng',
            self::Vuv => 'Vanuatu Vatu',
            self::Wst => 'Samoan Tālā',
            self::Xaf => 'Central African CFA Franc',
            self::Xcd => 'East Caribbean Dollar',
            self::Xof => 'West African CFA Franc',
            self::Xpf => 'CFP Franc',
            self::Yer => 'Yemeni Rial',
            self::Zar => 'South African Rand',
            self::Zmw => 'Zambian Kwacha',
            self::Zwg => 'Zimbabwean Dollar',
        };
    }

    public function digits(): int
    {
        return match ($this) {
            self::Btc,
            self::Doge,
            self::Ltc,
            self::Hbar,
            self::Bch,
            self::Icp,
            self::Kas,
            self::Cro,
            self::Apt,
            self::Waxp,
            self::Bsv,
            self::Flow,
            self::Gala,
            self::Zec,
            self::Neo,
            self::Hnt,
            self::Storj,
            self::Cvc => 8,
            self::Eth,
            self::Bnb,
            self::Link,
            self::Avax,
            self::Shib,
            self::Uni,
            self::Dai,
            self::Aave,
            self::Etc,
            self::Okb,
            self::Pol,
            self::Vet,
            self::Render,
            self::Fil,
            self::Arb,
            self::Fdusd,
            self::Gt,
            self::Fet,
            self::Ldo,
            self::Mkr,
            self::Theta,
            self::MntCrypto,
            self::Qnt,
            self::Om,
            self::Hegic,
            self::Coval,
            self::Ren,
            self::Math,
            self::Akt,
            self::Celr,
            self::Arpa,
            self::Keep,
            self::Hot,
            self::Tomo,
            self::Cream,
            self::Ogn,
            self::Bzrx,
            self::Nu,
            self::Fxs,
            self::Quick,
            self::Sushi,
            self::Ghst,
            self::Sfp,
            self::Tlm,
            self::Ramp,
            self::Drep,
            self::Pols,
            self::Tvk,
            self::Bond,
            self::Lto,
            self::Mdt,
            self::Bico,
            self::Alice,
            self::Cfg,
            self::Ctsi,
            self::Tribe,
            self::Dia,
            self::C98,
            self::ErnCrypto,
            self::Slp,
            self::Dusk,
            self::Aioz,
            self::Req,
            self::Vra,
            self::Gods,
            self::Lpt,
            self::Pond,
            self::Rbn,
            self::Asm,
            self::Spell,
            self::Jasmy,
            self::Ach,
            self::Xyo,
            self::SosCrypto,
            self::Mask,
            self::Gtc,
            self::Rari,
            self::Ilv,
            self::Idex,
            self::High,
            self::Rare,
            self::Btrst,
            self::Farm,
            self::Rad,
            self::Kp3r,
            self::Api3,
            self::Forth,
            self::Alpha,
            self::Boring,
            self::Toke,
            self::Mir,
            self::Ant,
            self::Dnt,
            self::Perp,
            self::Coti,
            self::Trb,
            self::Nkn,
            self::Rsr,
            self::Orn,
            self::Rlc,
            self::Oxt,
            self::Nmr,
            self::Rep,
            self::Mln,
            self::Badger,
            self::Uma,
            self::Gno,
            self::Rune,
            self::Inj,
            self::Egld,
            self::Imx,
            self::Grt,
            self::Axs,
            self::Snx,
            self::Ape,
            self::Crv,
            self::Mana,
            self::OneInch,
            self::Comp,
            self::Ens,
            self::Dydx,
            self::Bat,
            self::Sand,
            self::Gmt,
            self::Audio,
            self::Ankr,
            self::Ocean,
            self::Yfi,
            self::Bal,
            self::Lrc,
            self::Rndr,
            self::Band => 18,
            self::Xrp,
            self::Usdt,
            self::Usdc,
            self::Ada,
            self::Trx,
            self::Algo,
            self::Jup,
            self::Atom,
            self::Tia,
            self::Sei,
            self::Ray,
            self::Srm,
            self::Stx,
            self::Xtz,
            self::Kava,
            self::Chz,
            self::Iota => 6,
            self::Sol,
            self::Ton,
            self::Tao,
            self::Sui,
            self::Mina => 9,
            self::Xlm => 7,
            self::Dot => 10,
            self::Xmr, self::Ksm, self::Zil => 12,
            self::Near => 24,

            // Fiat Currencies
            self::Aed,
            self::Afn,
            self::All,
            self::Amd,
            self::Ang,
            self::Aoa,
            self::Aud,
            self::Awg,
            self::Azn,
            self::Bam,
            self::Bbd,
            self::Bdt,
            self::Ars,
            self::Bmd,
            self::Bgn,
            self::Bnd,
            self::Bob,
            self::Bov,
            self::Brl,
            self::Bsd,
            self::Btn,
            self::Bwp,
            self::Byn,
            self::Bzd,
            self::Cad,
            self::Cdf,
            self::Che,
            self::Chf,
            self::Chw,
            self::Cny,
            self::Cop,
            self::Cou,
            self::Crc,
            self::Cuc,
            self::Cup,
            self::Cve,
            self::Czk,
            self::Dkk,
            self::Dop,
            self::Dzd,
            self::Egp,
            self::Ern,
            self::Etb,
            self::Eur,
            self::Fjd,
            self::Fkp,
            self::Gbp,
            self::Gel,
            self::Ghs,
            self::Gip,
            self::Gmd,
            self::Gtq,
            self::Gyd,
            self::Hkd,
            self::Hnl,
            self::Htg,
            self::Huf,
            self::Idr,
            self::Ils,
            self::Inr,
            self::Irr,
            self::Jmd,
            self::Kes,
            self::Kgs,
            self::Khr,
            self::Kpw,
            self::Kyd,
            self::Kzt,
            self::Lak,
            self::Lbp,
            self::Lkr,
            self::Lrd,
            self::Lsl,
            self::Mad,
            self::Mdl,
            self::Mga,
            self::Mkd,
            self::Mmk,
            self::Mnt,
            self::Mop,
            self::Mru,
            self::Mur,
            self::Mwk,
            self::Zwg,
            self::Zar,
            self::Zmw,
            self::Yer,
            self::Xcd,
            self::Wst,
            self::Ves,
            self::Ved,
            self::Uzs,
            self::Uyw,
            self::Uyu,
            self::Uyi,
            self::Usn,
            self::Usd,
            self::Uah,
            self::Tzs,
            self::Twd,
            self::Ttd,
            self::Try,
            self::Top,
            self::Tmt,
            self::Tjs,
            self::Thb,
            self::Szl,
            self::Syp,
            self::Stn,
            self::Svc,
            self::Ssp,
            self::Srd,
            self::Sos,
            self::Sle,
            self::Shp,
            self::Sgd,
            self::Sek,
            self::Sdg,
            self::Scr,
            self::Sbd,
            self::Sar,
            self::Rub,
            self::Rsd,
            self::Ron,
            self::Qar,
            self::Pln,
            self::Pkr,
            self::Php,
            self::Pgk,
            self::Pen,
            self::Pab,
            self::Nzd,
            self::Npr,
            self::Nok,
            self::Nio,
            self::Ngn,
            self::Nad,
            self::Mzn,
            self::Myr,
            self::Mxv,
            self::Mxn,
            self::Mvr => 2,
            self::Bhd,
            self::Iqd,
            self::Jod,
            self::Kwd,
            self::Lyd,
            self::Tnd,
            self::Omr => 3,
            self::Bif,
            self::Clp,
            self::Djf,
            self::Gnf,
            self::Isk,
            self::Jpy,
            self::Kmf,
            self::Krw,
            self::Xpf,
            self::Xof,
            self::Xaf,
            self::Vuv,
            self::Vnd,
            self::Ugx,
            self::Rwf,
            self::Pyg => 0,
            self::Clf => 4,
        };
    }

    public function isCrypto(): bool
    {
        return match ($this) {
            self::Btc,
            self::Doge,
            self::Ltc,
            self::Hbar,
            self::Bch,
            self::Icp,
            self::Kas,
            self::Cro,
            self::Apt,
            self::Waxp,
            self::Bsv,
            self::Flow,
            self::Gala,
            self::Zec,
            self::Neo,
            self::Hnt,
            self::Storj,
            self::Cvc,
            self::Eth,
            self::Bnb,
            self::Link,
            self::Avax,
            self::Shib,
            self::Uni,
            self::Dai,
            self::Aave,
            self::Etc,
            self::Okb,
            self::Pol,
            self::Vet,
            self::Render,
            self::Fil,
            self::Arb,
            self::Fdusd,
            self::Gt,
            self::Fet,
            self::Ldo,
            self::Mkr,
            self::Theta,
            self::MntCrypto,
            self::Qnt,
            self::Om,
            self::Hegic,
            self::Coval,
            self::Ren,
            self::Math,
            self::Akt,
            self::Celr,
            self::Arpa,
            self::Keep,
            self::Hot,
            self::Tomo,
            self::Cream,
            self::Ogn,
            self::Bzrx,
            self::Nu,
            self::Fxs,
            self::Quick,
            self::Sushi,
            self::Ghst,
            self::Sfp,
            self::Tlm,
            self::Ramp,
            self::Drep,
            self::Pols,
            self::Tvk,
            self::Bond,
            self::Lto,
            self::Mdt,
            self::Bico,
            self::Alice,
            self::Cfg,
            self::Ctsi,
            self::Tribe,
            self::Dia,
            self::C98,
            self::ErnCrypto,
            self::Slp,
            self::Dusk,
            self::Aioz,
            self::Req,
            self::Vra,
            self::Gods,
            self::Lpt,
            self::Pond,
            self::Rbn,
            self::Asm,
            self::Spell,
            self::Jasmy,
            self::Ach,
            self::Xyo,
            self::SosCrypto,
            self::Mask,
            self::Gtc,
            self::Rari,
            self::Ilv,
            self::Idex,
            self::High,
            self::Rare,
            self::Btrst,
            self::Farm,
            self::Rad,
            self::Kp3r,
            self::Api3,
            self::Forth,
            self::Alpha,
            self::Boring,
            self::Toke,
            self::Mir,
            self::Ant,
            self::Dnt,
            self::Perp,
            self::Coti,
            self::Trb,
            self::Nkn,
            self::Rsr,
            self::Orn,
            self::Rlc,
            self::Oxt,
            self::Nmr,
            self::Rep,
            self::Mln,
            self::Badger,
            self::Uma,
            self::Gno,
            self::Rune,
            self::Inj,
            self::Egld,
            self::Imx,
            self::Grt,
            self::Axs,
            self::Snx,
            self::Ape,
            self::Crv,
            self::Mana,
            self::OneInch,
            self::Comp,
            self::Ens,
            self::Dydx,
            self::Bat,
            self::Sand,
            self::Gmt,
            self::Audio,
            self::Ankr,
            self::Ocean,
            self::Yfi,
            self::Bal,
            self::Lrc,
            self::Rndr,
            self::Band,
            self::Xrp,
            self::Usdt,
            self::Usdc,
            self::Ada,
            self::Trx,
            self::Algo,
            self::Jup,
            self::Atom,
            self::Tia,
            self::Sei,
            self::Ray,
            self::Srm,
            self::Stx,
            self::Xtz,
            self::Kava,
            self::Chz,
            self::Iota,
            self::Sol,
            self::Ton,
            self::Tao,
            self::Sui,
            self::Mina,
            self::Xlm,
            self::Dot,
            self::Xmr,
            self::Ksm,
            self::Zil,
            self::Near => true,
            default => false,
        };
    }

    public function numericCode(): int
    {
        return match ($this) {
            self::Ada => 1001,
            self::Bch => 1002,
            self::Bnb => 1003,
            self::Btc => 1004,
            self::Doge => 1005,
            self::Dot => 1006,
            self::Eth => 1007,
            self::Ltc => 1008,
            self::Shib => 1009,
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
            self::MntCrypto => 1047,
            self::Qnt => 1048,
            self::Rune => 1049,
            self::Sei => 1050,
            self::Inj => 1051,
            self::Egld => 1052,
            self::Imx => 1053,
            self::Sui => 1054,
            self::Stx => 1055,
            self::Grt => 1056,
            self::Bsv => 1057,
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
            self::Rad => 1111,
            self::Kp3r => 1112,
            self::Farm => 1113,
            self::Boring => 1114,
            self::Toke => 1115,
            self::Idex => 1116,
            self::Rari => 1117,
            self::Gtc => 1118,
            self::Ilv => 1119,
            self::Mask => 1120,
            self::Asm => 1121,
            self::Pond => 1122,
            self::Lpt => 1123,
            self::Rbn => 1124,
            self::Spell => 1125,
            self::Btrst => 1126,
            self::High => 1127,
            self::Jasmy => 1128,
            self::Ach => 1129,
            self::Xyo => 1130,
            self::Rare => 1131,
            self::Gods => 1132,
            self::SosCrypto => 1133,
            self::Vra => 1134,
            self::Waxp => 1135,
            self::ErnCrypto => 1136,
            self::Slp => 1137,
            self::C98 => 1138,
            self::Dusk => 1139,
            self::Aioz => 1140,
            self::Req => 1141,
            self::Dia => 1142,
            self::Ctsi => 1143,
            self::Bico => 1144,
            self::Mdt => 1145,
            self::Alice => 1146,
            self::Lto => 1147,
            self::Cfg => 1148,
            self::Tribe => 1149,
            self::Bond => 1150,
            self::Forth => 1151,
            self::Pols => 1152,
            self::Tvk => 1153,
            self::Drep => 1154,
            self::Sfp => 1155,
            self::Tlm => 1156,
            self::Ghst => 1157,
            self::Ramp => 1158,
            self::Quick => 1159,
            self::Fxs => 1160,
            self::Bzrx => 1161,
            self::Ogn => 1162,
            self::Sushi => 1163,
            self::Cream => 1164,
            self::Hot => 1165,
            self::Celr => 1166,
            self::Arpa => 1167,
            self::Keep => 1168,
            self::Nu => 1169,
            self::Math => 1170,
            self::Akt => 1171,
            self::Ren => 1172,
            self::Srm => 1173,
            self::Ray => 1174,
            self::Coval => 1175,
            self::Tomo => 1176,
            self::Hegic => 1177,
            self::Om => 1178,

            // Fiat currency numeric codes
            self::Aed => 784,
            self::Afn => 971,
            self::All => 8,
            self::Amd => 51,
            self::Ang => 532,
            self::Aoa => 973,
            self::Ars => 32,
            self::Aud => 36,
            self::Awg => 533,
            self::Azn => 944,
            self::Bam => 977,
            self::Bbd => 52,
            self::Bdt => 50,
            self::Bgn => 975,
            self::Bhd => 48,
            self::Bif => 108,
            self::Bmd => 60,
            self::Bnd => 96,
            self::Bob => 68,
            self::Bov => 984,
            self::Brl => 986,
            self::Bsd => 44,
            self::Btn => 64,
            self::Bwp => 72,
            self::Byn => 933,
            self::Bzd => 84,
            self::Cad => 124,
            self::Cdf => 976,
            self::Che => 947,
            self::Chf => 756,
            self::Chw => 948,
            self::Clf => 990,
            self::Clp => 152,
            self::Cny => 156,
            self::Cop => 170,
            self::Cou => 970,
            self::Crc => 188,
            self::Cuc => 931,
            self::Cup => 192,
            self::Cve => 132,
            self::Czk => 203,
            self::Djf => 262,
            self::Dkk => 208,
            self::Dop => 214,
            self::Dzd => 12,
            self::Egp => 818,
            self::Ern => 232,
            self::Etb => 230,
            self::Eur => 978,
            self::Fjd => 242,
            self::Fkp => 238,
            self::Gbp => 826,
            self::Gel => 981,
            self::Ghs => 936,
            self::Gip => 292,
            self::Gmd => 270,
            self::Gnf => 324,
            self::Gtq => 320,
            self::Gyd => 328,
            self::Hkd => 344,
            self::Hnl => 340,
            self::Htg => 332,
            self::Huf => 348,
            self::Idr => 360,
            self::Ils => 376,
            self::Inr => 356,
            self::Iqd => 368,
            self::Irr => 364,
            self::Isk => 352,
            self::Jmd => 388,
            self::Jod => 400,
            self::Jpy => 392,
            self::Kes => 404,
            self::Kgs => 417,
            self::Khr => 116,
            self::Kmf => 174,
            self::Kpw => 408,
            self::Krw => 410,
            self::Kwd => 414,
            self::Kyd => 136,
            self::Kzt => 398,
            self::Lak => 418,
            self::Lbp => 422,
            self::Lkr => 144,
            self::Lrd => 430,
            self::Lsl => 426,
            self::Lyd => 434,
            self::Mad => 504,
            self::Mdl => 498,
            self::Mga => 969,
            self::Mkd => 807,
            self::Mmk => 104,
            self::Mnt => 496,
            self::Mop => 446,
            self::Mru => 929,
            self::Mur => 480,
            self::Mvr => 462,
            self::Mwk => 454,
            self::Mxn => 484,
            self::Mxv => 979,
            self::Myr => 458,
            self::Mzn => 943,
            self::Nad => 516,
            self::Ngn => 566,
            self::Nio => 558,
            self::Nok => 578,
            self::Npr => 524,
            self::Nzd => 554,
            self::Omr => 512,
            self::Pab => 590,
            self::Pen => 604,
            self::Pgk => 598,
            self::Php => 608,
            self::Pkr => 586,
            self::Pln => 985,
            self::Pyg => 600,
            self::Qar => 634,
            self::Ron => 946,
            self::Rsd => 941,
            self::Rub => 643,
            self::Rwf => 646,
            self::Sar => 682,
            self::Sbd => 90,
            self::Scr => 690,
            self::Sdg => 938,
            self::Sek => 752,
            self::Sgd => 702,
            self::Shp => 654,
            self::Sle => 925,
            self::Sos => 706,
            self::Srd => 968,
            self::Ssp => 728,
            self::Stn => 930,
            self::Svc => 222,
            self::Syp => 760,
            self::Szl => 748,
            self::Thb => 764,
            self::Tjs => 972,
            self::Tmt => 934,
            self::Tnd => 788,
            self::Top => 776,
            self::Try => 949,
            self::Ttd => 780,
            self::Twd => 901,
            self::Tzs => 834,
            self::Uah => 980,
            self::Ugx => 800,
            self::Usd => 840,
            self::Usn => 997,
            self::Uyi => 940,
            self::Uyu => 858,
            self::Uyw => 927,
            self::Uzs => 860,
            self::Ved => 926,
            self::Ves => 928,
            self::Vnd => 704,
            self::Vuv => 548,
            self::Wst => 882,
            self::Xaf => 950,
            self::Xcd => 951,
            self::Xof => 952,
            self::Xpf => 953,
            self::Yer => 886,
            self::Zar => 710,
            self::Zmw => 967,
            self::Zwg => 924,
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
            'isCrypto' => $this->isCrypto(),
            'numericCode' => $this->numericCode(),
        ];
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function fromNumericCode(int $numericCode): self
    {
        return match ($numericCode) {
            // Crypto
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
            1047 => self::MntCrypto,
            1048 => self::Qnt,
            1049 => self::Rune,
            1050 => self::Sei,
            1051 => self::Inj,
            1052 => self::Egld,
            1053 => self::Imx,
            1054 => self::Sui,
            1055 => self::Stx,
            1056 => self::Grt,
            1057 => self::Bsv,
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
            1111 => self::Rad,
            1112 => self::Kp3r,
            1113 => self::Farm,
            1114 => self::Boring,
            1115 => self::Toke,
            1116 => self::Idex,
            1117 => self::Rari,
            1118 => self::Gtc,
            1119 => self::Ilv,
            1120 => self::Mask,
            1121 => self::Asm,
            1122 => self::Pond,
            1123 => self::Lpt,
            1124 => self::Rbn,
            1125 => self::Spell,
            1126 => self::Btrst,
            1127 => self::High,
            1128 => self::Jasmy,
            1129 => self::Ach,
            1130 => self::Xyo,
            1131 => self::Rare,
            1132 => self::Gods,
            1133 => self::SosCrypto,
            1134 => self::Vra,
            1135 => self::Waxp,
            1136 => self::ErnCrypto,
            1137 => self::Slp,
            1138 => self::C98,
            1139 => self::Dusk,
            1140 => self::Aioz,
            1141 => self::Req,
            1142 => self::Dia,
            1143 => self::Ctsi,
            1144 => self::Bico,
            1145 => self::Mdt,
            1146 => self::Alice,
            1147 => self::Lto,
            1148 => self::Cfg,
            1149 => self::Tribe,
            1150 => self::Bond,
            1151 => self::Forth,
            1152 => self::Pols,
            1153 => self::Tvk,
            1154 => self::Drep,
            1155 => self::Sfp,
            1156 => self::Tlm,
            1157 => self::Ghst,
            1158 => self::Ramp,
            1159 => self::Quick,
            1160 => self::Fxs,
            1161 => self::Bzrx,
            1162 => self::Ogn,
            1163 => self::Sushi,
            1164 => self::Cream,
            1165 => self::Hot,
            1166 => self::Celr,
            1167 => self::Arpa,
            1168 => self::Keep,
            1169 => self::Nu,
            1170 => self::Math,
            1171 => self::Akt,
            1172 => self::Ren,
            1173 => self::Srm,
            1174 => self::Ray,
            1175 => self::Coval,
            1176 => self::Tomo,
            1177 => self::Hegic,
            1178 => self::Om,
            // Fiat
            784 => self::Aed,
            971 => self::Afn,
            8 => self::All,
            51 => self::Amd,
            532 => self::Ang,
            973 => self::Aoa,
            32 => self::Ars,
            36 => self::Aud,
            533 => self::Awg,
            944 => self::Azn,
            977 => self::Bam,
            52 => self::Bbd,
            50 => self::Bdt,
            975 => self::Bgn,
            48 => self::Bhd,
            108 => self::Bif,
            60 => self::Bmd,
            96 => self::Bnd,
            68 => self::Bob,
            984 => self::Bov,
            986 => self::Brl,
            44 => self::Bsd,
            64 => self::Btn,
            72 => self::Bwp,
            933 => self::Byn,
            84 => self::Bzd,
            124 => self::Cad,
            976 => self::Cdf,
            947 => self::Che,
            756 => self::Chf,
            948 => self::Chw,
            990 => self::Clf,
            152 => self::Clp,
            156 => self::Cny,
            170 => self::Cop,
            970 => self::Cou,
            188 => self::Crc,
            931 => self::Cuc,
            192 => self::Cup,
            132 => self::Cve,
            203 => self::Czk,
            262 => self::Djf,
            208 => self::Dkk,
            214 => self::Dop,
            12 => self::Dzd,
            818 => self::Egp,
            232 => self::Ern,
            230 => self::Etb,
            978 => self::Eur,
            242 => self::Fjd,
            238 => self::Fkp,
            826 => self::Gbp,
            981 => self::Gel,
            936 => self::Ghs,
            292 => self::Gip,
            270 => self::Gmd,
            324 => self::Gnf,
            320 => self::Gtq,
            328 => self::Gyd,
            344 => self::Hkd,
            340 => self::Hnl,
            332 => self::Htg,
            348 => self::Huf,
            360 => self::Idr,
            376 => self::Ils,
            356 => self::Inr,
            368 => self::Iqd,
            364 => self::Irr,
            352 => self::Isk,
            388 => self::Jmd,
            400 => self::Jod,
            392 => self::Jpy,
            404 => self::Kes,
            417 => self::Kgs,
            116 => self::Khr,
            174 => self::Kmf,
            408 => self::Kpw,
            410 => self::Krw,
            414 => self::Kwd,
            136 => self::Kyd,
            398 => self::Kzt,
            418 => self::Lak,
            422 => self::Lbp,
            144 => self::Lkr,
            430 => self::Lrd,
            426 => self::Lsl,
            434 => self::Lyd,
            504 => self::Mad,
            498 => self::Mdl,
            969 => self::Mga,
            807 => self::Mkd,
            104 => self::Mmk,
            496 => self::Mnt,
            446 => self::Mop,
            929 => self::Mru,
            480 => self::Mur,
            462 => self::Mvr,
            454 => self::Mwk,
            484 => self::Mxn,
            979 => self::Mxv,
            458 => self::Myr,
            943 => self::Mzn,
            516 => self::Nad,
            566 => self::Ngn,
            558 => self::Nio,
            578 => self::Nok,
            524 => self::Npr,
            554 => self::Nzd,
            512 => self::Omr,
            590 => self::Pab,
            604 => self::Pen,
            598 => self::Pgk,
            608 => self::Php,
            586 => self::Pkr,
            985 => self::Pln,
            600 => self::Pyg,
            634 => self::Qar,
            946 => self::Ron,
            941 => self::Rsd,
            643 => self::Rub,
            646 => self::Rwf,
            682 => self::Sar,
            90 => self::Sbd,
            690 => self::Scr,
            938 => self::Sdg,
            752 => self::Sek,
            702 => self::Sgd,
            654 => self::Shp,
            925 => self::Sle,
            706 => self::Sos,
            968 => self::Srd,
            728 => self::Ssp,
            930 => self::Stn,
            222 => self::Svc,
            760 => self::Syp,
            748 => self::Szl,
            764 => self::Thb,
            972 => self::Tjs,
            934 => self::Tmt,
            788 => self::Tnd,
            776 => self::Top,
            949 => self::Try,
            780 => self::Ttd,
            901 => self::Twd,
            834 => self::Tzs,
            980 => self::Uah,
            800 => self::Ugx,
            840 => self::Usd,
            997 => self::Usn,
            940 => self::Uyi,
            858 => self::Uyu,
            927 => self::Uyw,
            860 => self::Uzs,
            926 => self::Ved,
            928 => self::Ves,
            704 => self::Vnd,
            548 => self::Vuv,
            882 => self::Wst,
            950 => self::Xaf,
            951 => self::Xcd,
            952 => self::Xof,
            953 => self::Xpf,
            886 => self::Yer,
            710 => self::Zar,
            967 => self::Zmw,
            924 => self::Zwg,
            default => throw new InvalidArgumentException('Invalid numeric code.')
        };
    }
}
