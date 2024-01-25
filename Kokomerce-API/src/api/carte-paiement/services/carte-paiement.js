'use strict';

/**
 * carte-paiement service
 */

const { createCoreService } = require('@strapi/strapi').factories;

module.exports = createCoreService('api::carte-paiement.carte-paiement');
