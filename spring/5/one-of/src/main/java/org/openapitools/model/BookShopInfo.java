package org.openapitools.model;

import java.net.URI;
import java.util.Objects;
import com.fasterxml.jackson.annotation.JsonProperty;
import com.fasterxml.jackson.annotation.JsonCreator;
import com.fasterxml.jackson.annotation.JsonValue;
import java.util.ArrayList;
import java.util.List;
import com.fasterxml.jackson.annotation.JsonTypeName;
import org.openapitools.jackson.nullable.JsonNullable;
import java.time.OffsetDateTime;
import javax.validation.Valid;
import javax.validation.constraints.*;
import io.swagger.v3.oas.annotations.media.Schema;


import java.util.*;
import javax.annotation.Generated;

/**
 * BookShopInfo
 */

@Generated(value = "org.openapitools.codegen.languages.SpringCodegen", date = "2022-07-07T10:48:37.835411Z[Etc/UTC]")
public class BookShopInfo implements ShopInfo {

  /**
   * Gets or Sets tags
   */
  public enum TagsEnum {
    BOOKS("books"),
    
    READING("reading");

    private String value;

    TagsEnum(String value) {
      this.value = value;
    }

    @JsonValue
    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    @JsonCreator
    public static TagsEnum fromValue(String value) {
      for (TagsEnum b : TagsEnum.values()) {
        if (b.value.equals(value)) {
          return b;
        }
      }
      throw new IllegalArgumentException("Unexpected value '" + value + "'");
    }
  }

  @JsonProperty("tags")
  private TagsEnum tags;

  @JsonProperty("genres")
  @Valid
  private List<String> genres = null;

  public BookShopInfo tags(TagsEnum tags) {
    this.tags = tags;
    return this;
  }

  /**
   * Get tags
   * @return tags
  */
  
  @Schema(name = "tags", required = false)
  public TagsEnum getTags() {
    return tags;
  }

  public void setTags(TagsEnum tags) {
    this.tags = tags;
  }

  public BookShopInfo genres(List<String> genres) {
    this.genres = genres;
    return this;
  }

  public BookShopInfo addGenresItem(String genresItem) {
    if (this.genres == null) {
      this.genres = new ArrayList<>();
    }
    this.genres.add(genresItem);
    return this;
  }

  /**
   * Get genres
   * @return genres
  */
  
  @Schema(name = "genres", required = false)
  public List<String> getGenres() {
    return genres;
  }

  public void setGenres(List<String> genres) {
    this.genres = genres;
  }

  @Override
  public boolean equals(Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    BookShopInfo bookShopInfo = (BookShopInfo) o;
    return Objects.equals(this.tags, bookShopInfo.tags) &&
        Objects.equals(this.genres, bookShopInfo.genres);
  }

  @Override
  public int hashCode() {
    return Objects.hash(tags, genres);
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class BookShopInfo {\n");
    sb.append("    tags: ").append(toIndentedString(tags)).append("\n");
    sb.append("    genres: ").append(toIndentedString(genres)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }
}

