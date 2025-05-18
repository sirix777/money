## Complete List of Available Cryptocurrency Codes

## Special Naming Conventions

### Previous _CRYPTO Suffix
Previously, when a cryptocurrency code conflicted with an existing fiat currency code, the suffix `_CRYPTO` was appended to differentiate it. However, in the current implementation, these codes have been simplified:
- `MNT` - Mantle (previously MNT_CRYPTO)
- `ERN` - Ethernity Chain (previously ERN_CRYPTO)

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
- `SEI` - Sei Network
- `INJ` - Injective
- `STX` - Stacks
- `XTZ` - Tezos
- `KAVA` - Kava
- `FLOW` - Flow
- `MINA` - Mina Protocol
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
- `TAO` - Bittensor
- `KAS` - Kaspa
- `POL` - Polygon
- `RENDER` - Render Token
- `JUP` - Jupiter
- `ARB` - Arbitrum
- `THETA` - Theta Network
- `MNT` - Mantle
- `EGLD` - MultiversX (Elrond)
- `IMX` - Immutable X
- `SUI` - Sui

### Stablecoins
- `USDT` - Tether
- `USDC` - USD Coin
- `DAI` - Dai
- `FDUSD` - First Digital USD

### DeFi Ecosystem
- `AAVE` - Aave
- `UNI` - Uniswap
- `SUSHI` - SushiSwap
- `CRV` - Curve DAO Token
- `BAL` - Balancer
- `YFI` - yearn.finance
- `COMP` - Compound
- `MKR` - Maker
- `LDO` - Lido DAO
- `SNX` - Synthetix
- `1INCH` - 1inch
- `DYDX` - dYdX
- `FXS` - Frax Share

### Exchange Tokens
- `OKB` - OKB
- `GT` - GateToken
- `CRO` - Cronos

### Layer 1/2 Solutions
- `NEAR` - Near Protocol
- `ATOM` - Cosmos
- `FIL` - Filecoin
- `ALGO` - Algorand
- `EGLD` - MultiversX (Elrond)
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
- `RNDR` - Render Network
- `GALA` - Gala
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
- `GTC` - Gitcoin
- `CTSI` - Cartesi
- `BICO` - Biconomy
- `CFG` - Centrifuge
- `POL` - Polygon
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
- `AKT` - Akash Network

### Oracle & Data
- `LINK` - Chainlink
- `GRT` - The Graph
- `API3` - API3
- `BAND` - Band Protocol
- `DIA` - DIA
- `MDT` - Measurable Data Token

### Meme Coins
- `DOGE` - Dogecoin
- `SHIB` - Shiba Inu

### Infrastructure & Interoperability
- `QNT` - Quant
- `ATOM` - Cosmos
- `RUNE` - THORChain
- `KSM` - Kusama
- `REN` - Ren

### Other Notable Tokens
- `CHZ` - Chiliz
- `BAT` - Basic Attention Token
- `ENS` - Ethereum Name Service
- `ZIL` - Zilliqa
- `ANKR` - Ankr
- `PERP` - Perpetual Protocol
- `MASK` - Mask Network
- `TOKE` - Tokemak
- `IDEX` - IDEX
- `RARI` - Rarible
- `XYO` - XYO Network
- `ACH` - Alchemy Pay
- `ASM` - Assemble Protocol
- `LPT` - Livepeer
- `RBN` - Ribbon Finance
- `BTRST` - Braintrust
- `HIGH` - Highstreet
- `RARE` - SuperRare

### Development & Platform Tokens
- `GTC` - Gitcoin
- `CTSI` - Cartesi
- `BICO` - Biconomy
- `CFG` - Centrifuge

### Specialized Tokens
- `LRC` - Loopring
- `RLC` - iExec RLC
- `NMR` - Numeraire
- `MLN` - Enzyme
- `POND` - Marlin
- `SPELL` - Spell Token
- `TRIBE` - Tribe
- `FORTH` - Ampleforth Governance Token
- `BOND` - BarnBridge
- `FARM` - Harvest Finance
- `KP3R` - Keep3rV1
- `RAD` - Radicle
- `ALPHA` - Alpha Venture DAO
- `BADGER` - Badger DAO
- `MIR` - Mirror Protocol

### Additional Tokens
- `VRA` - Verasity
- `WAXP` - WAX
- `C98` - Coin98
- `ALICE` - MyNeighborAlice
- `TVK` - Terra Virtua Kolect
- `POLS` - Polkastarter
- `CREAM` - Cream Finance
- `DUSK` - Dusk Network
- `AIOZ` - AIOZ Network
- `REQ` - Request
- `ERN` - Ethernity Chain
- `LTO` - LTO Network
- `DREP` - Drep
- `SFP` - SafePal
- `TLM` - Alien Worlds
- `GHST` - Aavegotchi
- `RAMP` - RAMP
- `QUICK` - QuickSwap
- `BZRX` - bZx Protocol
- `OGN` - Origin Protocol
- `HOT` - Holo
- `CELR` - Celer Network
- `ARPA` - ARPA Chain
- `KEEP` - Keep Network
- `NU` - NuCypher
- `MATH` - Math Wallet
- `COVAL` - Circuits of Value
- `TOMO` - TomoChain
- `HEGIC` - Hegic
- `OM` - MANTRA DAO
- `SRM` - Serum
- `RAY` - Raydium
- `ASM` - Assemble Protocol
- `LPT` - Livepeer
- `RBN` - Ribbon Finance
- `BTRST` - Braintrust
- `HIGH` - Highstreet
- `ACH` - Alchemy Pay
- `XYO` - XYO Network
- `TOKE` - Tokemak
- `IDEX` - IDEX
- `RARI` - Rarible
- `AKT` - Akash Network
- `MDT` - Measurable Data Token
- `DIA` - DIA
