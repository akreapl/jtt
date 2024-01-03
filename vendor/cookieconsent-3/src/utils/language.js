import { globalObj } from '../core/global';
import {
    _log,
    elContains,
    fetchJson,
    addClass,
    removeClass,
    isString,
    isArray
} from './general';

/**
 * Detect the available language. The language autodetection process prioritizes finding translations
 * for the complete language code. If translations for the complete code are unavailable, the detection
 * mechanism then resorts to searching for the language-only version.
 * Works with 'en', 'en_US' and 'en-US'.
 *
 * @param {string} languageCode - The language code to be detected.
 * @returns {?string} The detected language code, or null if not detected.
 */
export const getAvailableLanguage = (languageCode) => {
    if (!isString(languageCode))
        return null;

    if (languageCode in globalObj._state._allTranslations)
        return languageCode;

    /**
     * @type {string}
     */
    let language = languageCode.slice(0, 2);

    if (language in globalObj._state._allTranslations)
        return language;

    return null;
};

/**
 * Returns the current language code
 * @returns {string}
 */
export const getCurrentLanguageCode = () => {
    return globalObj._state._currentLanguageCode || globalObj._state._userConfig.language.default;
};

/**
 * Set language code
 * @param {string} newLanguageCode
 */
export const setCurrentLanguageCode = (newLanguageCode) => {
    newLanguageCode && (globalObj._state._currentLanguageCode = newLanguageCode);
};

/**
 * Get current client's browser language
 * returns only the first 2 chars: en-US => en
 * @returns {string} language
 */
export const getBrowserLanguageCode = () => navigator.language;

/**
 * Get the lang attribute
 * @returns lang attribute
 */
export const getDocumentLanguageCode = () => document.documentElement.lang;

/**
 * Resolve the language to use.
 * @returns {string} language code
 */
export const resolveCurrentLanguageCode = () =>  {
    const autoDetect = globalObj._state._userConfig.language.autoDetect;

    if (autoDetect) {
        _log('CookieConsent [LANG]: autoDetect strategy: "' + autoDetect + '"');

        const detectionStrategies = {
            browser: getBrowserLanguageCode(),
            document: getDocumentLanguageCode()
        };

        /**
         * @type {string}
         */
        const newLanguageCode = getAvailableLanguage(detectionStrategies[autoDetect]);

        if (newLanguageCode)
            return newLanguageCode;
    }

    /**
     * Use current language
     */
    return getCurrentLanguageCode();
};

/**
 * Load translation
 * @param {string | null} [desiredLanguageCode]
 */
export const loadTranslationData = async (desiredLanguageCode) => {
    const state = globalObj._state;

    /**
     * @type {string}
     */
    let currentLanguageCode = getAvailableLanguage(desiredLanguageCode)
        ? desiredLanguageCode
        : getCurrentLanguageCode();

    let currentTranslation = state._allTranslations[currentLanguageCode];

    if (!currentTranslation)
        return false;

    /**
     * If translation is a string, fetch the external json file and replace
     * the string (path to json file) with the parsed object
     */
    if (isString(currentTranslation)) {
        const fetchedTranslation = await fetchJson(currentTranslation);

        if (!fetchedTranslation)
            return false;

        currentTranslation = fetchedTranslation;
    }

    state._currentTranslation = currentTranslation;
    setCurrentLanguageCode(currentLanguageCode);

    _log('CookieConsent [LANG]: set language: "' + currentLanguageCode + '"');

    return true;
};

/**
 * Toggle RTL class on/off based on current language
 */
export const handleRtlLanguage = () => {
    let rtlLanguages = globalObj._state._userConfig.language.rtl;
    let ccMain = globalObj._dom._ccMain;

    if (rtlLanguages && ccMain) {
        if (!isArray(rtlLanguages))
            rtlLanguages = [rtlLanguages];

        elContains(rtlLanguages, globalObj._state._currentLanguageCode)
            ? addClass(ccMain, 'cc--rtl')
            : removeClass(ccMain, 'cc--rtl');
    }
};
