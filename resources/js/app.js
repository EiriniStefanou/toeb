require("./bootstrap");

window.Vue = require("vue").default;

Vue.component(
    "clients-list",
    require("./components/Clients/clientsList").default
);

Vue.component(
    "create-client",
    require("./components/Clients/createClient").default
);

Vue.component(
    "estates-list",
    require("./components/Estates/estatesList").default
);

Vue.component(
    "create-estate",
    require("./components/Estates/createEstate").default
);

Vue.component(
    "regions-list",
    require("./components/Regions/regionsList").default
);

Vue.component(
    "create-region",
    require("./components/Regions/createRegion").default
);

Vue.component(
    "payments-list",
    require("./components/Payments/paymentsList").default
);

Vue.component(
    "create-payment",
    require("./components/Payments/createPayment").default
);

Vue.component(
    "landtypes-list",
    require("./components/Admins/LandTypes/landtypesList").default
);

Vue.component(
    "create-landtype",
    require("./components/Admins/LandTypes/createLandtype").default
);

Vue.component(
    "chargetypes-list",
    require("./components/Admins/ChargeTypes/chargetypesList").default
);

Vue.component(
    "create-chargetype",
    require("./components/Admins/ChargeTypes/createChargetype").default
);

const app = new Vue({
    el: "#app",
});
