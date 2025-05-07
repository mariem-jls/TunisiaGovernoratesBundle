import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';
import { startStimulusApp } from '@symfony/stimulus-bundle';
import GovernorateAutocompleteController from 'governorate-autocomplete';

const app = startStimulusApp();

app.register('governorate-autocomplete', GovernorateAutocompleteController);