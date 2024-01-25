'use strict';

/**
 * ligne-commande router
 */

const { createCoreRouter } = require('@strapi/strapi').factories;

module.exports = createCoreRouter('api::ligne-commande.ligne-commande');
