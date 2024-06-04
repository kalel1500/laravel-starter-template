import es from './lang/es.json';
import en from './lang/en.json';
import {DefaultTranslations, Translator} from "laravel-ts-utilities";

export interface AppTranslations extends DefaultTranslations {
    "test_message": string,
    "test_message_VARIABLE": string
}

const translator = Translator.getInstance() as Translator<AppTranslations>;
translator.registerTranslations('es', es);
translator.registerTranslations('en', en);
export const __ = (key: keyof AppTranslations, replacements?: Record<string, string>) => {
    return translator.get(key, replacements);
}
