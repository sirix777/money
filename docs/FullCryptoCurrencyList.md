## Complete List of Available Cryptocurrency Codes

## Special Naming Conventions

### _CRYPTO Suffix
When a cryptocurrency code conflicts with an existing fiat currency code, the suffix `_CRYPTO` is appended to differentiate it. For example:
- `MNT_CRYPTO` - The cryptocurrency version of MNT (to distinguish from Mongolian Tugrik)
- `SOS_CRYPTO` - The cryptocurrency version of SOS (to distinguish from Somali Shilling)
- `ERN_CRYPTO` - The cryptocurrency version of ERN (to distinguish from Eritrean Nakfa)

### Numeric Prefix Handling
For cryptocurrency codes that begin with numbers (like `1INCH`), the enum case name uses a descriptive word format instead of the number for PHP compatibility:
- Case name: `OneInch`
- Actual value: `'1INCH'`

This is because PHP enum cases cannot start with a number, so we use a readable word representation while preserving the actual cryptocurrency code value.


### Major Cryptocurrencies
- `BTC` - Bitcoin
- `ETH` - Ethereum
- `BNB` - Binance Coin
- `SOL` - Solana
- `ADA` - Cardano
- `XRP` - Ripple
- `DOT` - Polkadot
- `AVAX` - Avalanche
- `TRX` - Tron
- `LTC` - Litecoin
- `LINK` - Chainlink
- `XLM` - Stellar
- `TON` - Toncoin
- `BCH` - Bitcoin Cash
- `ETC` - Ethereum Classic
- `VET` - VeChain
- `APT` - Aptos
- `QNT` - Quant
- `RUNE` - THORChain
- `SEI` - Sei
- `INJ` - Injective
- `STX` - Stacks
- `BSV` - Bitcoin SV
- `XTZ` - Tezos
- `KAVA` - Kava
- `FLOW` - Flow
- `MINA` - Mina
- `NEO` - Neo
- `IOTA` - IOTA
- `HNT` - Helium
- `GNO` - Gnosis
- `UMA` - UMA
- `CVC` - Civic
- `REP` - Augur
- `OXT` - Orchid
- `ANT` - Aragon
- `DNT` - district0x
- `NKN` - NKN
- `RSR` - Reserve Rights
- `COTI` - COTI
- `TRB` - Tellor
- `ORN` - Orion Protocol
- `MIR` - Mirror Protocol
- `BADGER` - Badger DAO
- `ALPHA` - Alpha Finance
- `RAD` - Radicle
- `KP3R` - Keep3rV1
- `FARM` - Harvest Finance
- `BORING` - BoringDAO
- `TOKE` - Tokemak
- `IDEX` - IDEX
- `RARI` - Rarible
- `ASM` - Assemble Protocol
- `LPT` - Livepeer
- `RBN` - Ribbon Finance
- `BTRST` - Braintrust
- `HIGH` - Highstreet
- `ACH` - Alchemy Pay
- `XYO` - XYO
- `SOS_CRYPTO` - OpenDAO
- `ERN_CRYPTO` - Ethernity Chain
- `DUSK` - Dusk Network
- `AIOZ` - AIOZ Network
- `REQ` - Request
- `DIA` - DIA
- `MDT` - Measurable Data Token
- `LTO` - LTO Network
- `BOND` - BarnBridge
- `DREP` - DREP
- `SFP` - SafePal
- `TLM` - Alien Worlds
- `GHST` - Aavegotchi
- `RAMP` - RAMP
- `QUICK` - QuickSwap
- `FXS` - Frax Share
- `BZRX` - bZx Protocol
- `OGN` - Origin Protocol
- `HOT` - Holo
- `CELR` - Celer Network
- `ARPA` - ARPA Chain
- `KEEP` - Keep Network
- `NU` - NuCypher
- `MATH` - MATH
- `AKT` - Akash Network
- `REN` - Ren
- `SRM` - Serum
- `RAY` - Raydium
- `COVAL` - Circuits of Value
- `TOMO` - TomoChain
- `HEGIC` - Hegic
- `OM` - MANTRA DAO

### Stablecoins
- `USDT` - Tether
- `USDC` - USD Coin
- `DAI` - Dai
- `FDUSD` - First Digital USD

### DeFi Ecosystem
- `AAVE` - Aave
- `UNI` - Uniswap
- `SUSHI` - SushiSwap
- `CRV` - Curve
- `BAL` - Balancer
- `YFI` - yearn.finance
- `COMP` - Compound
- `MKR` - Maker
- `LDO` - Lido
- `SNX` - Synthetix
- `1INCH` - 1inch
- `DYDX` - dYdX

### Exchange Tokens
- `OKB` - OKB Token
- `GT` - Gate Token
- `CRO` - Crypto.com Coin

### Layer 1/2 Solutions
- `NEAR` - NEAR Protocol
- `ATOM` - Cosmos
- `FIL` - Filecoin
- `ALGO` - Algorand
- `EGLD` - Elrond
- `HBAR` - Hedera
- `ICP` - Internet Computer
- `IMX` - Immutable X
- `THETA` - Theta Network
- `FET` - Fetch.ai
- `TIA` - Celestia
- `SUI` - Sui
- `GRT` - The Graph
- `AXS` - Axie Infinity
- `KSM` - Kusama
- `RNDR` - Render Token
- `GALA` - Gala Games
- `MANA` - Decentraland
- `SAND` - The Sandbox
- `APE` - ApeCoin
- `GMT` - STEPN
- `GODS` - Gods Unchained
- `ILV` - Illuvium
- `CHZ` - Chiliz
- `BAT` - Basic Attention Token
- `ENS` - Ethereum Name Service
- `ZIL` - Zilliqa
- `ANKR` - Ankr
- `PERP` - Perpetual Protocol
- `MASK` - Mask Network
- `JASMY` - JasmyCoin
- `GTC` - GitCoin
- `CTSI` - Cartesi
- `BICO` - Biconomy
- `CFG` - Centrifuge
- `LRC` - Loopring
- `RLC` - iExec
- `NMR` - Numeraire
- `MLN` - Enzyme
- `POND` - Marlin
- `SPELL` - Spell Token
- `RARE` - SuperRare
- `TRIBE` - Tribe
- `FORTH` - Ampleforth Governance
- `VRA` - Verasity
- `WAXP` - WAX
- `SLP` - Smooth Love Potion
- `C98` - Coin98
- `ALICE` - My Neighbor Alice
- `TVK` - Terra Virtua Kolect
- `POLS` - Polkastarter
- `CREAM` - Cream Finance

### Privacy Coins
- `XMR` - Monero
- `ZEC` - Zcash

### Storage & Computing
- `FIL` - Filecoin
- `STORJ` - Storj
- `AUDIO` - Audius
- `OCEAN` - Ocean Protocol

### Oracle & Data
- `LINK` - Chainlink
- `GRT` - The Graph
- `API3` - API3
- `BAND` - Band Protocol

### Meme Coins
- `DOGE` - Dogecoin
- `SHIB` - Shiba Inu

### Infrastructure & Interoperability
- `QNT` - Quant
- `ATOM` - Cosmos
- `RUNE` - THORChain
- `KSM` - Kusama

### Other Notable Tokens
- `CHZ` - Chiliz
- `BAT` - Basic Attention Token
- `ENS` - Ethereum Name Service
- `ZIL` - Zilliqa
- `ANKR` - Ankr
- `PERP` - Perpetual Protocol
- `MASK` - Mask Network
- `JASMY` - JasmyCoin

### Development & Platform Tokens
- `GTC` - GitCoin
- `CTSI` - Cartesi
- `BICO` - Biconomy
- `CFG` - Centrifuge

### Specialized Tokens
- `LRC` - Loopring
- `RLC` - iExec
- `NMR` - Numeraire
- `MLN` - Enzyme
- `POND` - Marlin
- `SPELL` - Spell Token
- `RARE` - SuperRare
- `TRIBE` - Tribe
- `FORTH` - Ampleforth Governance

### Additional Tokens
- `VRA` - Verasity
- `WAXP` - WAX
- `SLP` - Smooth Love Potion
- `C98` - Coin98
- `ALICE` - My Neighbor Alice
- `TVK` - Terra Virtua Kolect
- `POLS` - Polkastarter
- `CREAM` - Cream Finance
