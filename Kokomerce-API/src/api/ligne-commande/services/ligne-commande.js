'use strict';

/**
 * ligne-commande service
 */

const { createCoreService } = require('@strapi/strapi').factories;

module.exports = createCoreService('api::ligne-commande.ligne-commande');
