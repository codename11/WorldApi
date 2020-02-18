# World api

## Database used in api project:

It was freely avaliable db from [MySQL](https://dev.mysql.com/doc/index-other.html) where you can download free of charge.

## How to use:

1. Download db itself.
2. Create db by name "world" by using any software you want for it. I used phpmyadmin.
3. Download this project
4. Start your server and fire up migrations :)

### Avaliable endpoints:

 - http://worldapi.test/api/countries for list of countries, GET method. Return value is json with countries with it's cities, capital and languages.
 
 - http://worldapi.test/api/country/ABW for specific country with it's capital and cities, where you  need to provide key i.e. "ABW", GET method. Return values is country with it's cities, capital and languages.
  - List of avaliable keys for countries: 
  [{"Code":"ABW"},{"Code":"AFG"},{"Code":"AGO"},{"Code":"AIA"},{"Code":"ALB"},{"Code":"AND"},{"Code":"ANT"},{"Code":"ARE"},{"Code":"ARG"},{"Code":"ARM"},{"Code":"ASM"},{"Code":"ATA"},{"Code":"ATF"},{"Code":"ATG"},{"Code":"AUS"},{"Code":"AUT"},{"Code":"AZE"},{"Code":"BDI"},{"Code":"BEL"},{"Code":"BEN"},{"Code":"BFA"},{"Code":"BGD"},{"Code":"BGR"},{"Code":"BHR"},{"Code":"BHS"},{"Code":"BIH"},{"Code":"BLR"},{"Code":"BLZ"},{"Code":"BMU"},{"Code":"BOL"},{"Code":"BRA"},{"Code":"BRB"},{"Code":"BRN"},{"Code":"BTN"},{"Code":"BVT"},{"Code":"BWA"},{"Code":"CAF"},{"Code":"CAN"},{"Code":"CCK"},{"Code":"CHE"},{"Code":"CHL"},{"Code":"CHN"},{"Code":"CIV"},{"Code":"CMR"},{"Code":"COD"},{"Code":"COG"},{"Code":"COK"},{"Code":"COL"},{"Code":"COM"},{"Code":"CPV"},{"Code":"CRI"},{"Code":"CUB"},{"Code":"CXR"},{"Code":"CYM"},{"Code":"CYP"},{"Code":"CZE"},{"Code":"DEU"},{"Code":"DJI"},{"Code":"DMA"},{"Code":"DNK"},{"Code":"DOM"},{"Code":"DZA"},{"Code":"ECU"},{"Code":"EGY"},{"Code":"ERI"},{"Code":"ESH"},{"Code":"ESP"},{"Code":"EST"},{"Code":"ETH"},{"Code":"FIN"},{"Code":"FJI"},{"Code":"FLK"},{"Code":"FRA"},{"Code":"FRO"},{"Code":"FSM"},{"Code":"GAB"},{"Code":"GBR"},{"Code":"GEO"},{"Code":"GHA"},{"Code":"GIB"},{"Code":"GIN"},{"Code":"GLP"},{"Code":"GMB"},{"Code":"GNB"},{"Code":"GNQ"},{"Code":"GRC"},{"Code":"GRD"},{"Code":"GRL"},{"Code":"GTM"},{"Code":"GUF"},{"Code":"GUM"},{"Code":"GUY"},{"Code":"HKG"},{"Code":"HMD"},{"Code":"HND"},{"Code":"HRV"},{"Code":"HTI"},{"Code":"HUN"},{"Code":"IDN"},{"Code":"IND"},{"Code":"IOT"},{"Code":"IRL"},{"Code":"IRN"},{"Code":"IRQ"},{"Code":"ISL"},{"Code":"ISR"},{"Code":"ITA"},{"Code":"JAM"},{"Code":"JOR"},{"Code":"JPN"},{"Code":"KAZ"},{"Code":"KEN"},{"Code":"KGZ"},{"Code":"KHM"},{"Code":"KIR"},{"Code":"KNA"},{"Code":"KOR"},{"Code":"KWT"},{"Code":"LAO"},{"Code":"LBN"},{"Code":"LBR"},{"Code":"LBY"},{"Code":"LCA"},{"Code":"LIE"},{"Code":"LKA"},{"Code":"LSO"},{"Code":"LTU"},{"Code":"LUX"},{"Code":"LVA"},{"Code":"MAC"},{"Code":"MAR"},{"Code":"MCO"},{"Code":"MDA"},{"Code":"MDG"},{"Code":"MDV"},{"Code":"MEX"},{"Code":"MHL"},{"Code":"MKD"},{"Code":"MLI"},{"Code":"MLT"},{"Code":"MMR"},{"Code":"MNG"},{"Code":"MNP"},{"Code":"MOZ"},{"Code":"MRT"},{"Code":"MSR"},{"Code":"MTQ"},{"Code":"MUS"},{"Code":"MWI"},{"Code":"MYS"},{"Code":"MYT"},{"Code":"NAM"},{"Code":"NCL"},{"Code":"NER"},{"Code":"NFK"},{"Code":"NGA"},{"Code":"NIC"},{"Code":"NIU"},{"Code":"NLD"},{"Code":"NOR"},{"Code":"NPL"},{"Code":"NRU"},{"Code":"NZL"},{"Code":"OMN"},{"Code":"PAK"},{"Code":"PAN"},{"Code":"PCN"},{"Code":"PER"},{"Code":"PHL"},{"Code":"PLW"},{"Code":"PNG"},{"Code":"POL"},{"Code":"PRI"},{"Code":"PRK"},{"Code":"PRT"},{"Code":"PRY"},{"Code":"PSE"},{"Code":"PYF"},{"Code":"QAT"},{"Code":"REU"},{"Code":"ROM"},{"Code":"RUS"},{"Code":"RWA"},{"Code":"SAU"},{"Code":"SDN"},{"Code":"SEN"},{"Code":"SGP"},{"Code":"SGS"},{"Code":"SHN"},{"Code":"SJM"},{"Code":"SLB"},{"Code":"SLE"},{"Code":"SLV"},{"Code":"SMR"},{"Code":"SOM"},{"Code":"SPM"},{"Code":"STP"},{"Code":"SUR"},{"Code":"SVK"},{"Code":"SVN"},{"Code":"SWE"},{"Code":"SWZ"},{"Code":"SYC"},{"Code":"SYR"},{"Code":"TCA"},{"Code":"TCD"},{"Code":"TGO"},{"Code":"THA"},{"Code":"TJK"},{"Code":"TKL"},{"Code":"TKM"},{"Code":"TMP"},{"Code":"TON"},{"Code":"TTO"},{"Code":"TUN"},{"Code":"TUR"},{"Code":"TUV"},{"Code":"TWN"},{"Code":"TZA"},{"Code":"UGA"},{"Code":"UKR"},{"Code":"UMI"},{"Code":"URY"},{"Code":"USA"},{"Code":"UZB"},{"Code":"VAT"},{"Code":"VCT"},{"Code":"VEN"},{"Code":"VGB"},{"Code":"VIR"},{"Code":"VNM"},{"Code":"VUT"},{"Code":"WLF"},{"Code":"WSM"},{"Code":"YEM"},{"Code":"YUG"},{"Code":"ZAF"},{"Code":"ZMB"},{"Code":"ZWE"}]

 - http://worldapi.test/api/country for creating new country entry, POST method, you also need to provide data in json format.
 Example of how should it look:

    {
        "Code": "YYY",
        "Name": "AfghanistanYYY",
        "Continent": "Asia",
        "Region": "Southern and Central Asia",
        "SurfaceArea": 652090,
        "IndepYear": 1919,
        "Population": 22720000,
        "LifeExpectancy": 45.9,
        "GNP": 5976,
        "GNPOld": null,
        "LocalName": "Afganistan/Afqanestan",
        "GovernmentForm": "Islamic Emirate",
        "HeadOfState": "Mohammad Omar",
        "Capital": null,
        "Code2": "AF"
    }

 - http://worldapi.test/api/country/ABW for updating existing entry in country table, PUT method, uses same format as previous. Uses "Code" property for identification.

 - http://worldapi.test/api/country/YYY for deleting entry from country table. Uses DELETE method, no need for additional parameter except in url.

 - http://worldapi.test/api/cities for list of cities, GET method. Return value is city itself with it's country and languages. 

 - http://worldapi.test/api/city/4081 for getting particular city, GET method. "ID" property in url is numerical.

 - http://worldapi.test/api/city for making a entry in city db. POST method, you also need to provide data in json format.
 Example of how should it look:

    {
        "Name": "Kabul23",
        "CountryCode": "YYY",
        "District": "KabolX",
        "Population": 1780000,
        "main": true
    }

 - http://worldapi.test/api/city/4079 for updating an entry in city table, PUT method, you also need to provide data in json format. It's similar as previous, it does have an "ID" in url, but it uses a "ID" property from json you provided.
  Example of how should it look:

    {
        "ID": 4079,
        "Name": "KabulY",
        "CountryCode": "YYY",
        "District": "KabolX",
        "Population": 1780000,
        "main": true
    }

 - http://worldapi.test/api/city/4079 for deleting an entry from city table. Only needs a id provided in url. Which will vary depending on number of entries.

 - http://worldapi.test/api/languages for getting all languages, GET method with their respective countries with pagination and metas. 

 Example of how should it look:

    {
        "data": [
            {
                "CountryCode": "ABW",
                "Language": "Dutch",
                "IsOfficial": "T",
                "Percentage": 5.3,
                "updated_at": "2020-02-17 22:36:57",
                "created_at": "2020-02-17 22:36:57",
                "countries": [
                    {
                        "Code": "ABW",
                        "Name": "Aruba",
                        "Continent": "North America",
                        "Region": "Caribbean",
                        "SurfaceArea": 193,
                        "IndepYear": null,
                        "Population": 103000,
                        "LifeExpectancy": 78.4,
                        "GNP": 828,
                        "GNPOld": 793,
                        "LocalName": "Aruba",
                        "GovernmentForm": "Nonmetropolitan Territory of The Netherlands",
                        "HeadOfState": "Beatrix",
                        "Capital": 129,
                        "Code2": "AW",
                        "updated_at": "2020-02-17 22:36:57",
                        "created_at": "2020-02-17 22:36:57"
                    }
                ]
            },
            {
                "CountryCode": "ABW",
                "Language": "English",
                "IsOfficial": "F",
                "Percentage": 9.5,
                "updated_at": "2020-02-17 22:36:57",
                "created_at": "2020-02-17 22:36:57",
                "countries": [
                    {
                        "Code": "ABW",
                        "Name": "Aruba",
                        "Continent": "North America",
                        "Region": "Caribbean",
                        "SurfaceArea": 193,
                        "IndepYear": null,
                        "Population": 103000,
                        "LifeExpectancy": 78.4,
                        "GNP": 828,
                        "GNPOld": 793,
                        "LocalName": "Aruba",
                        "GovernmentForm": "Nonmetropolitan Territory of The Netherlands",
                        "HeadOfState": "Beatrix",
                        "Capital": 129,
                        "Code2": "AW",
                        "updated_at": "2020-02-17 22:36:57",
                        "created_at": "2020-02-17 22:36:57"
                    }
                ]
            },
            {
                "CountryCode": "ABW",
                "Language": "Papiamento",
                "IsOfficial": "F",
                "Percentage": 76.7,
                "updated_at": "2020-02-17 22:36:57",
                "created_at": "2020-02-17 22:36:57",
                "countries": [
                    {
                        "Code": "ABW",
                        "Name": "Aruba",
                        "Continent": "North America",
                        "Region": "Caribbean",
                        "SurfaceArea": 193,
                        "IndepYear": null,
                        "Population": 103000,
                        "LifeExpectancy": 78.4,
                        "GNP": 828,
                        "GNPOld": 793,
                        "LocalName": "Aruba",
                        "GovernmentForm": "Nonmetropolitan Territory of The Netherlands",
                        "HeadOfState": "Beatrix",
                        "Capital": 129,
                        "Code2": "AW",
                        "updated_at": "2020-02-17 22:36:57",
                        "created_at": "2020-02-17 22:36:57"
                    }
                ]
            },
            {
                "CountryCode": "ABW",
                "Language": "Spanish",
                "IsOfficial": "F",
                "Percentage": 7.4,
                "updated_at": "2020-02-17 22:36:57",
                "created_at": "2020-02-17 22:36:57",
                "countries": [
                    {
                        "Code": "ABW",
                        "Name": "Aruba",
                        "Continent": "North America",
                        "Region": "Caribbean",
                        "SurfaceArea": 193,
                        "IndepYear": null,
                        "Population": 103000,
                        "LifeExpectancy": 78.4,
                        "GNP": 828,
                        "GNPOld": 793,
                        "LocalName": "Aruba",
                        "GovernmentForm": "Nonmetropolitan Territory of The Netherlands",
                        "HeadOfState": "Beatrix",
                        "Capital": 129,
                        "Code2": "AW",
                        "updated_at": "2020-02-17 22:36:57",
                        "created_at": "2020-02-17 22:36:57"
                    }
                ]
            },
            {
                "CountryCode": "AFG",
                "Language": "Balochi",
                "IsOfficial": "F",
                "Percentage": 0.9,
                "updated_at": "2020-02-17 22:36:57",
                "created_at": "2020-02-17 22:36:57",
                "countries": [
                    {
                        "Code": "AFG",
                        "Name": "Afghanistan",
                        "Continent": "Asia",
                        "Region": "Southern and Central Asia",
                        "SurfaceArea": 652090,
                        "IndepYear": 1919,
                        "Population": 22720000,
                        "LifeExpectancy": 45.9,
                        "GNP": 5976,
                        "GNPOld": null,
                        "LocalName": "Afganistan/Afqanestan",
                        "GovernmentForm": "Islamic Emirate",
                        "HeadOfState": "Mohammad Omar",
                        "Capital": 1,
                        "Code2": "AF",
                        "updated_at": "2020-02-17 22:36:57",
                        "created_at": "2020-02-17 22:36:57"
                    }
                ]
            }
        ],
        "links": {
            "first": "http://worldapi.test/api/languages?page=1",
            "last": "http://worldapi.test/api/languages?page=199",
            "prev": null,
            "next": "http://worldapi.test/api/languages?page=2"
        },
        "meta": {
            "current_page": 1,
            "from": 1,
            "last_page": 199,
            "path": "http://worldapi.test/api/languages",
            "per_page": 5,
            "to": 5,
            "total": 994
        }
    }

 - http://worldapi.test/api/language/dari for getting particular language, GET method. Returns json with language data and it's country.

 - List of avaliable keys for languages:
  [
    {
        "Language": "Dutch"
    },
    {
        "Language": "English"
    },
    {
        "Language": "Papiamento"
    },
    {
        "Language": "Spanish"
    },
    {
        "Language": "Balochi"
    },
    {
        "Language": "Dari"
    },
    {
        "Language": "Pashto"
    },
    {
        "Language": "Turkmenian"
    },
    {
        "Language": "Uzbek"
    },
    {
        "Language": "Ambo"
    },
    {
        "Language": "Chokwe"
    },
    {
        "Language": "Kongo"
    },
    {
        "Language": "Luchazi"
    },

 - http://worldapi.test/api/language for creating an entry in countrylanguage table, POST method.

Example of how should it look:
{
    "CountryCode": "AFG",
    "Language": "Jezik1",
    "IsOfficial": "F",
    "Percentage": 0.1
}

 - http://worldapi.test/api/language/dari for updating particular language, PUT method.

 Example of how should it look:
{
    "CountryCode": "AFG",
    "Language": "Jezik2",
    "IsOfficial": "t",
    "Percentage": 0.2
}

 - http://worldapi.test/api/language/dari for deleting an language. No json required.

 #### It was tricky considering that db World from MySQL website isn't made for specific use with Laravel, which is used as backend here.

 #### Also, only listing and showing for particular country, city and language are allowed. If you want to interact with db with POST, PUT and DELETE methods, it is posiible only within confines of local environment.

