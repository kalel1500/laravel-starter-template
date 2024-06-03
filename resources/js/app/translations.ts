import es from './lang/es.json';
import en from './lang/en.json';
import {DefaultTranslations, Translator, TranslatorT} from "laravel-ts-utilities";

export interface AppTranslations extends DefaultTranslations {
    "testQqq": string,
    "anotherField": string
}

let EXTERNAL: TranslatorT<AppTranslations> | null = null;
export function __t(key: keyof AppTranslations, replacements?: Record<string, string>): string
{
    if (!EXTERNAL) {
        EXTERNAL = new TranslatorT<AppTranslations>();
        EXTERNAL.addTranslations('es', es);
        EXTERNAL.addTranslations('en', en);
    }
    return EXTERNAL.get(key, replacements);
}


export function registerTranslations(): void {
    Translator.registerDefaultTranslations();
    Translator.registerTranslations('es', es);
    Translator.registerTranslations('en', en);
}
