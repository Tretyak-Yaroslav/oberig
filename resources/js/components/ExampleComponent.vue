<template>

    <div>

        <ais-instant-search :search-client="searchClient" index-name="content">

            <ais-configure :query="query"  :hitsPerPage="5" :restrictSearchableAttributes="['title']"/>

            <ais-autocomplete>
                <template slot-scope="{ currentRefinement, indices, refine }">

                    <vue-autosuggest :suggestions="indicesToSuggestions(indices)" @selected="onSelect"

                                     :input-props="{

                        style: 'width: 100%',

                        onInputChange: refine,

                        placeholder: 'Search here…',

                    }"

                    >

                        <template slot-scope="{ suggestion }">

                            <ais-highlight :hit="suggestion.item" attribute="title" v-if="suggestion.item.title" />

                            <strong>{{ suggestion.item.title }}</strong>

                        </template>

                    </vue-autosuggest>

                </template>

            </ais-autocomplete>


        </ais-instant-search>

        <ais-instant-search

                :search-client="searchClient"

                index-name="content"

        >

            <!-- setting the query from the first instance on the second instance -->

            <ais-configure :query="query" />

            <ais-hits>

                <div slot="item" slot-scope="{ item }">

                    <ais-highlight :hit="item" attribute="title" v-if="item.title" />

                    <strong>$ {{ item.title }}</strong>

                </div>

            </ais-hits>

            <!-- <ais-pagination /> -->

        </ais-instant-search>

    </div>

</template>



<script>

    import algoliasearch from 'algoliasearch/lite';

    import { VueAutosuggest } from 'vue-autosuggest';


    export default {

        components: { VueAutosuggest },

        data() {

            return {

                searchClient: algoliasearch(
                    '4QPJHK2U6P',
                    'ef3606982198fcd337da1b67336f5d93'
                ),

                query: 'обер',

            };

        },

        methods: {

            onSelect(selected) {

                if (selected) {

                    this.query = selected.item.name;

                }

            },

            indicesToSuggestions(indices) {

                return indices.map(({ hits }) => ({ data: hits }));

            },

        },

    };

</script>
