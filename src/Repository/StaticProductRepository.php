<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\Image;
use App\Model\Price;
use App\Model\Product;
use Spryker\DecimalObject\Decimal;
use Symfony\Component\AssetMapper\AssetMapperInterface;
use Symfony\Component\Uid\Uuid;

final readonly class StaticProductRepository implements
    ProductRepositoryInterface
{
    /**
     * @var array<Product>
     */
    private array $products;
    
    public function __construct(
        private AssetMapperInterface $assetMapper,
    ) {
        $this->products = [
            new Product(
                number: Uuid::fromRfc4122("72514a27-cc5a-4356-a46f-f054db83d287"),
                name: "Rucksack Alpenglueck",
                brand: "Alpen Aurora",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-alpenglueck.webp"),
                    "Ein leuchtend roter Rucksack mit weißen Edelweiß-Blumen, eingebettet in einer Alpenwiesenlandschaft.",
                ),
                price: new Price(Decimal::create("45.95")),
                isNew: true,
            ),
            new Product(
                number: Uuid::fromRfc4122("b138b0ae-13d5-4d1e-af2b-588de7c06608"),
                name: "Rucksack Berg Echo",
                brand: "Alpen Aurora",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-berg-echo.webp"),
                    "Ein robuster, dunkelgrüner Rucksack, an einem felsigen Bergpfad stehend, mit einem Echo, das in den Bergen widerhallt",
                ),
                price: new Price(Decimal::create("225.99")),
                isNew: true,
            ),
            new Product(
                number: Uuid::fromRfc4122("ced291a4-c006-42e1-9978-3753307f6e56"),
                name: "Koffer Edelweiss Träger",
                brand: "Helvetia Harmony",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/koffer-edelweiss-traeger.webp"),
                    "Ein elegant weißer Koffer mit subtilen Edelweiss-Verzierungen, bereit für eine luxuriöse Schweizer Reise.",
                ),
                price: new Price(Decimal::create("1100.50"), reducedBy: 20.00),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("04257873-5640-4bad-956d-d2c0f8ffe464"),
                name: "Rucksack Matterhorn Marsch",
                brand: "Swiss Serenity",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-matterhorn-marsch.webp"),
                    "Ein widerstandsfähiger Rucksack mit dem Bild des majestätischen Matterhorns, bereit für das Abenteuer.",
                ),
                price: new Price(Decimal::create("120.55"), reducedBy: 10.00),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("34e30b33-f4e1-4f2c-a80a-84d1c5337778"),
                name: "Rucksack Gipfel Stürmer",
                brand: "Swiss Serenity",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-gipfel-stuermer.webp"),
                    "Ein hochfunktioneller Rucksack auf dem Gipfel eines schneebedeckten Berges, umgeben von einer atemberaubenden Aussicht.",
                ),
                price: new Price(Decimal::create("180.99")),
                isNew: true,
            ),
            new Product(
                number: Uuid::fromRfc4122("cbedf158-c6de-4caf-8a4f-71da051334d6"),
                name: "Koffer Alpen Vista",
                brand: "Bernina Brilliance",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/koffer-alpen-vista.webp"),
                    "Ein Panoramablick auf die Alpen, reflektiert auf der glänzenden Oberfläche eines stilvollen Koffers.",
                ),
                price: new Price(Decimal::create("98.15"), reducedBy: 50.00),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("fcd868d3-4f33-4c31-9b94-26ea764b1888"),
                name: "Rucksack Schweizer Wanderer",
                brand: "Alpen Aurora",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-schweizer-wanderer.webp"),
                    "Ein traditioneller Rucksack, festgehalten auf einem Wanderweg durch das malerische Schweizer Hochland.",
                ),
                price: new Price(Decimal::create("63.20"), reducedBy: 30.00),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("4f31c17d-cf86-4dc8-902f-fa58e4b9eccc"),
                name: "Rucksack Berner Bär Pack",
                brand: "Bernina Brilliance",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-berner-baer-pack.webp"),
                    "Ein kraftvoller, brauner Rucksack, verziert mit einem Symbol des Berner Bären, stehend vor dem Bundeshaus.",
                ),
                price: new Price(Decimal::create("2100.00")),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("35dd08e3-6557-4f79-b5d9-bfe9fd0b682f"),
                name: "Koffer Zürich Zug",
                brand: "Helvetia Harmony",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/koffer-zuerich-zug.webp"),
                    "Ein eleganter, moderner Koffer vor dem Hintergrund der lebendigen Stadt Zürich.",
                ),
                price: new Price(Decimal::create("450.78"), reducedBy: 10.00),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("9c590807-b1d8-441a-83e9-2d9698d19705"),
                name: "Koffer Genfer Gepäck",
                brand: "Lucerne Legacy",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/koffer-genfer-gepaeck.webp"),
                    "Ein luxuriöses Gepäckstück, das die Essenz des Genfer Sees mit seiner tiefblauen Farbe einfängt.",
                ),
                price: new Price(Decimal::create("20.99")),
                isNew: true,
            ),
            new Product(
                number: Uuid::fromRfc4122("192d759b-b6bc-460f-a1d7-e402321fd265"),
                name: "Rucksack Luzern Laster",
                brand: "Lucerne Legacy",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-luzern-laster.webp"),
                    "Ein strahlender Rucksack, der die historische Kapellbrücke und die Wasserspiegelungen in Luzern widerspiegelt.",
                ),
                price: new Price(Decimal::create("35.99")),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("5ee13246-1094-4d13-97a7-a0b9b7e60e75"),
                name: "Rucksack Fribourg Freiheit",
                brand: "Helvetia Harmony",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-fribourg-freiheit.webp"),
                    "Ein Rucksack, der die Freiheit und Schönheit des mittelalterlichen Fribourgs symbolisiert, an einem Aussichtspunkt über der Altstadt.",
                ),
                price: new Price(Decimal::create("133.70"), reducedBy: 42.00),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("67463d8f-0383-4fd6-8b11-73bab1534c6b"),
                name: "Rucksack Tessin Träume",
                brand: "Alpen Aurora",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-tessin-traeume.webp"),
                    "Ein sattgrüner Rucksack, der an den traumhaften Landschaften des Tessins erinnert, zwischen Seen und Palmen.",
                ),
                price: new Price(Decimal::create("12.50")),
                isNew: true,
            ),
            new Product(
                number: Uuid::fromRfc4122("831703c1-b342-40ce-9f1b-7346e3cbfb9a"),
                name: "Koffer Valais Voyager",
                brand: "Swiss Serenity",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/koffer-valais-voyager.webp"),
                    "Ein robustes Gepäckstück, das die Vielfalt des Wallis widerspiegelt, von Weinbergen bis zu schneebedeckten Gipfeln.",
                ),
                price: new Price(Decimal::create("300.99")),
                isNew: true,
            ),
            new Product(
                number: Uuid::fromRfc4122("6c58c679-25c7-43e0-a73e-1065cbbb690e"),
                name: "Rucksack Jura Journey",
                brand: "Lucerne Legacy",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-jura-journey.webp"),
                    "Ein mystischer, dunkelgrüner Rucksack, verloren in den nebligen Wäldern des Juragebirges.",
                ),
                price: new Price(Decimal::create("55.60"), reducedBy: 90.00),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("79106eff-39b4-4d4d-b022-0d3b1e7ae561"),
                name: "Rucksack Neuchâtel Navigator",
                brand: "Bernina Brilliance",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-neuchatel-navigator.webp"),
                    "Ein marineblauer Rucksack, der die maritime Eleganz von Neuchâtel am Ufer des gleichnamigen Sees verkörpert.",
                ),
                price: new Price(Decimal::create("2499.99"), reducedBy: 2.00),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("32ef335c-6fb4-4711-81ea-fc9ce9c89a29"),
                name: "Rucksack Glarus Globetrotter",
                brand: "Bernina Brilliance",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-glarus-globetrotter.webp"),
                    "Ein widerstandsfähiger Rucksack, der die robuste Schönheit des Glarnerlands, umgeben von steilen Gipfeln, einfängt.",
                ),
                price: new Price(Decimal::create("74.40")),
                isNew: true,
            ),
            new Product(
                number: Uuid::fromRfc4122("6d2fbe9b-9a1e-4844-a2a4-02a49fcb614b"),
                name: "Rucksack Aargau Adventurer",
                brand: "Alpen Aurora",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-aargau-adventurer.webp"),
                    "Ein lebendiger Rucksack, der durch die vielfältige Landschaft des Aargaus reist, von Flüssen bis zu Schlössern.",
                ),
                price: new Price(Decimal::create("456.78"), reducedBy: 50.00),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("a8f3aacd-56f6-4a0a-a6cc-f299dcd3cb05"),
                name: "Rucksack Thurgau Thruway",
                brand: "Swiss Serenity",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-thurgau-thruway.webp"),
                    "Ein frischer, apfelgrüner Rucksack, der an die fruchtbaren Obstgärten des Thurgaus erinnert.",
                ),
                price: new Price(Decimal::create("42.42"), reducedBy: 5.00),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("b9e12692-9575-4227-a06c-16e0c329f8d4"),
                name: "Rucksack Schaffhausen Harmony",
                brand: "Helvetia Harmony",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-schaffhausen-harmony.webp"),
                    "Ein klassischer Rucksack, überblickend die kraftvollen Wassermassen des Rheinfalls in Schaffhausen.",
                ),
                price: new Price(Decimal::create("260.10")),
                isNew: true,
            ),
            new Product(
                number: Uuid::fromRfc4122("b461aece-ea9b-4041-8503-ff25fbb375ac"),
                name: "Koffer Solothurn Stroller",
                brand: "Helvetia Harmony",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/koffer-solothurn-stroller.webp"),
                    "Ein eleganter, schwarzer Koffer, der die barocke Pracht Solothurns, der schönsten Barockstadt der Schweiz, einfängt.",
                ),
                price: new Price(Decimal::create("500.00")),
                isNew: true,
            ),
            new Product(
                number: Uuid::fromRfc4122("37d45eda-ce17-4d6a-868e-95f5a61b721a"),
                name: "Rucksack Basel Backpacker",
                brand: "Lucerne Legacy",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-basel-backpacker.webp"),
                    "Ein kulturell inspirierter Rucksack, der die dynamische Kunst- und Architekturszene Basels widerspiegelt.",
                ),
                price: new Price(Decimal::create("10.80"), reducedBy: 5.00),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("72e28c8a-bf6d-4220-b2d4-1959938d5ea7"),
                name: "Koffer Lausanne Luggage",
                brand: "Bernina Brilliance",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/koffer-lausanne-luggage.webp"),
                    "Ein stilvolles Gepäckstück, das die Raffinesse und den olympischen Geist Lausannes ausstrahlt.",
                ),
                price: new Price(Decimal::create("280.78"), reducedBy: 10.00),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("9f9a72dc-36d4-4308-a479-08d2c3833f40"),
                name: "Rucksack St Gallen Stash",
                brand: "Alpen Aurora",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-st-gallen-stash.webp"),
                    "Ein kunstvoll gestalteter Rucksack, der das reiche Erbe der St. Galler Stickerei und Bibliothek ehrt.",
                ),
                price: new Price(Decimal::create("65.89")),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("c2b97c29-cec8-47ce-af03-0fe00f9c84db"),
                name: "Rucksack Graubünden Glide",
                brand: "Swiss Serenity",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-graubuenden-glide.webp"),
                    "Ein Rucksack, der die reine, unberührte Schönheit Graubündens einfängt, von verschneiten Pässen bis zu versteckten Tälern.",
                ),
                price: new Price(Decimal::create("111.56")),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("d714eccb-74bc-4060-9e2a-989b22e99316"),
                name: "Rucksack Uri Uplift",
                brand: "Helvetia Harmony",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-uri-uplift.webp"),
                    "Ein kraftvoller Rucksack, der die robuste Essenz des Kantons Uri, das Herz der Schweiz, verkörpert.",
                ),
                price: new Price(Decimal::create("1234.56")),
                isNew: true,
            ),
            new Product(
                number: Uuid::fromRfc4122("d2936214-c34c-43e7-9bc7-34236a5f3467"),
                name: "Rucksack Schwyz Satchel",
                brand: "Lucerne Legacy",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-schwyz-satchel.webp"),
                    "Ein traditioneller Satchel, der die historische Bedeutung von Schwyz, dem Geburtsort der Eidgenossenschaft, symbolisiert.",
                ),
                price: new Price(Decimal::create("3600.23"), reducedBy: 33.00),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("57c1758f-dad5-4b0e-acf0-0e846bdaafae"),
                name: "Rucksack Obwalden Odyssey",
                brand: "Alpen Aurora",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-obwalden-odyssey.webp"),
                    "Ein Abenteuer-Rucksack, der durch die malerischen Landschaften Obwaldens wandert, von kristallklaren Seen bis zu majestätischen Bergen.",
                ),
                price: new Price(Decimal::create("230.46")),
                isNew: true,
            ),
            new Product(
                number: Uuid::fromRfc4122("12bb132b-0c0c-4073-ab65-65dc29bc0afb"),
                name: "Rucksack Nidwalden Nomad",
                brand: "Bernina Brilliance",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-nidwalden-nomad.webp"),
                    "Ein wanderlustiger Rucksack, der die ruhige Schönheit Nidwaldens einfängt, von idyllischen Dörfern bis zu luftigen Höhen.",
                ),
                price: new Price(Decimal::create("50.00"), reducedBy: 5.00),
                isNew: false,
            ),
            new Product(
                number: Uuid::fromRfc4122("250c2ee5-f275-48d7-8da1-64f0573fb7d5"),
                name: "Rucksack Zug Zephyr",
                brand: "Swiss Serenity",
                listingImage: new Image(
                    $this->assetMapper->getPublicPath("products/rucksack-zug-zephyr.webp"),
                    "Ein leichter, luftiger Rucksack, der die Eleganz und den wirtschaftlichen Puls des Kantons Zug einfängt.",
                ),
                price: new Price(Decimal::create("44.12"), reducedBy: 15.00),
                isNew: false,
            ),
        ];
    }

    /**
     * @return array<Product>
     */  
    public function findAll(?int $limit = null, ?int $offset = null): array
    {
        return array_slice(
            $this->products,
            $offset ?? -1,
            $limit ?? -1,
        );
    }

    /**
     * @return array<Product>
     */  
    public function findByName(string $name): array
    {
        return array_filter(
            $this->products,
            function (Product $p) use ($name) {
                $similarity = 0;
                similar_text($p->getName(), $name, $similarity);

                return $similarity > 33;
            } 
        );
    }

    public function findByNumber(Uuid $number): Product|null
    {
        foreach ($this->products as $product) {
            if ($product->getNumber()->equals($number)) {
                return $product;
            }
        }

        return null;
    }
}
