<?php

declare(strict_types=1);

namespace GDPE\Infrastructure\Config;

/**
 * Single source of truth for the JetEngine Custom Post Type slug and
 * meta field keys used to store dog pedigree data.
 *
 * Isolating these strings here means that if the JetEngine content
 * model (CPT slug or meta field keys) changes, only this file needs
 * to be edited — no Domain or Application code is affected.
 */
final class JetEngineFieldMap
{
    /**
     * The actual WordPress CPT slug for dogs on the production site.
     * Changed from 'gdpe_dog' to 'dogs' to match the existing CPT.
     */
    public const CPT_SLUG = 'dogs';

    /** Meta key storing the father's WordPress post ID. */
    public const META_SIRE_ID = 'gdpe_sire_id';

    /** Meta key storing the mother's WordPress post ID. */
    public const META_DAM_ID = 'gdpe_dam_id';

    /** Meta key for dog name (existing JetEngine field - PRIMARY source of truth for name matching). */
    public const META_DOG_NAME = 'dog_name';

    /** Meta key for dog sex (existing JetEngine field). */
    public const META_SEX = 'dog_sex';

    /** Taxonomy slug for breed (existing taxonomy, NOT gdpe_breed). */
    public const TAXONOMY_BREED = 'breed';

    /** Meta key for birth date (existing JetEngine field). */
    public const META_BIRTH_DATE = 'birth_date';

    /** Meta key for father's name as entered by user (plain text). */
    public const META_FATHER_NAME = 'father_name';

    /** Meta key for mother's name as entered by user (plain text). */
    public const META_MOTHER_NAME = 'mother_name';

    /**
     * Internal flag meta key to track whether parents have been
     * auto-connected for a given dog post. Prevents re-processing
     * on every save but allows re-run when names change.
     */
    public const META_PARENTS_CONNECTED = '_gdpe_parents_auto_connected';

    /**
     * JetEngine Relation ID for Sire (father) relation.
     * Relation #6: Dogs (Parent) → Dogs (Child), One to Many.
     */
    public const SIRE_RELATION_ID = 6;

    /**
     * JetEngine Relation ID for Dam (mother) relation.
     * Relation #7: Dogs (Parent) → Dogs (Child), One to Many.
     */
    public const DAM_RELATION_ID = 7;

    /** Option key for plugin settings. */
    public const OPTION_KEY_SETTINGS = 'gdpe_plugin_settings';

    private function __construct()
    {
        // Static constant holder — never instantiated.
    }
}
