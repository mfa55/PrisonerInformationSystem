package com.hallak.relationships;

import com.hallak.entities.Prisoner;
import com.hallak.entities.Victim;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;
import org.springframework.format.annotation.DateTimeFormat;

import javax.persistence.*;
import java.sql.Date;

/**
 * Created by mrhal on 4/21/2017.
 */
@Entity
@Table(name = "crime")
@Getter
@Setter
@NoArgsConstructor
public class Crime {
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private int Id;

    @OneToOne
    @JoinColumn(name = "prisonerId")
    private Prisoner prisoner;

    @ManyToOne
    @JoinColumn(name = "victimId")
    private Victim victim;

    private String crimeType;

    @DateTimeFormat(pattern = "dd-MM-yyyy")
    @Column(columnDefinition = "DATE")
    private Date crimeDate;

    private int level;
}
