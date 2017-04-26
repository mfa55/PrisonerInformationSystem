package com.hallak.config;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.data.rest.webmvc.config.RepositoryRestConfigurerAdapter;
import org.springframework.data.web.HateoasPageableHandlerMethodArgumentResolver;

/**
 * Created by mrhal on 4/23/2017.
 */
@Configuration
public class RestApiConfiguration extends RepositoryRestConfigurerAdapter {
    @Bean
    public HateoasPageableHandlerMethodArgumentResolver customResolver(
            HateoasPageableHandlerMethodArgumentResolver pageableResolver) {
        pageableResolver.setOneIndexedParameters(true);
        pageableResolver.setFallbackPageable(null);
        return pageableResolver;
    }
}